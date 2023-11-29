import {first} from 'lodash'
import Revision from '@/libraries/Revision'

/**
 * cache FHIR metadata configuration using revision ID.
 * used by the metadata getter
 */
const fhirFieldsCache = {}

const module = {
    namespaced: true,
    state: {
        list: [],
        selected_id: null,
    },
    mutations: {
        SET_LIST: function(state, payload) {
            state.list = payload
        },
        SET_SELECTED: function(state, payload) {
            state.selected_id = payload
        },
    },
    actions: {
        setList(context, remote_list) {
            const list = []
            remote_list.forEach((params, index) => {
                let revision = new Revision(params)
                // set the revision index (visible, for example, in the RevisionSelect DropDown)
                revision.setIndex(index+1)
                list.push(revision)
            })
            list.reverse()
            context.commit('SET_LIST', list)
            return list
        },
        setSelected(context, revision_id) {
            context.commit('SET_SELECTED', revision_id)
            const revision = context.getters['selected']
            context.dispatch('selectRevision', revision, { root: true })
            return revision
        },
        selectMostRecentRevision(context) {
            const revisions = context.state.list
            if(revisions.length>0) {
                const revision = revisions[0]
                const revision_id = revision.getID()
                context.dispatch('setSelected', revision_id)
            }
        },
        async approve(context, {revision_id, vm}) {
            const params = { revision_id }
            const $API = vm.$API
            const approve_response =  await $API.dispatch('revisions/approveRevision', params)
            const {data} = approve_response
            const { data: revision } = data
            const {metadata: {id}} = revision // get the revision_id
            // reload the list
            const revisions_response = await $API.dispatch('revisions/getRevisions')
            const {data: revisions} = revisions_response
            await context.dispatch('setList', revisions)
            //select the revision that has just been approved
            context.dispatch('setSelected', id)
            return approve_response
        },
        async delete(context, {revision_id, vm}) {
            const params = { revision_id }
            const $API = vm.$API
            const result =  await $API.dispatch('revisions/deleteRevision', params)
            
            // reload the list
            const revisions_response = await $API.dispatch('revisions/getRevisions')
            const {data: revisions} = revisions_response
            const list = await context.dispatch('setList', revisions)
            if(list.length>0) {
                const lastRevision = list[0]
                const {metadata: {id}} = lastRevision
                //select the revision that has just been approved
                context.dispatch('setSelected', id)
            }
            return result
        },
    },
    getters: {
        selected(state) {
            const revisions = state.list
            const revision_id = state.selected_id
            if(!revision_id) return

            const revision = revisions.filter(revision => revision.getID() === revision_id).shift()
            if(revision===null || typeof revision !== 'object') return

            return revision
        },
        /**
         * get the total number of revisions available
         * @param {object} state 
         */
        total(state) {
            const revisions = state.list
            let total = revisions.length
            if(isNaN(total) || total<1) total = 0
            return total
        },
        /* current: (state) => {
            if(isNaN(state.selected)) return null
            const revision = state.list.filter( revision => revision.id==state.selected)
            return revision
        }, */
        isActive: (state) => (revision) => {
            try {
                const { metadata: { id} } = revision
                const revisions = state.list
                const active_revision = first(revisions)
                const { metadata: { id:active_revision_ID } } = active_revision
                return (id===active_revision_ID)
            } catch (error) {
                return false
            }
        },
        /**
         * get the metadata configuration for the selected
         * revision
         * @param {object} state 
         */
        metadata: (state, getters, rootState, rootGetters) => (revision) => {
            const {fields=[], metadata: {id:revision_id}} = revision
            const cached = fhirFieldsCache[revision_id]
            if(cached) return cached
            const revisionFilter = ({field}) => {
                return fields.indexOf(field)>=0
            }
            let groups = rootGetters['metadata/groups'](revisionFilter)
            fhirFieldsCache[revision_id] = groups
            return groups
        }
    }
}

export default module