import settingsModule from '@/store/modules/settings'
import revisionsModule from '@/store/modules/revisions'
import revisionModule from '@/store/modules/revision'
import userModule from '@/store/modules/user'
import validatorModule from '@/store/modules/validator'
import warningsModule from '@/store/modules/warnings'
import mrnsModule from '@/store/modules/mrns'
import metadataModule from '@/store/modules/metadata'

/**
 * state management
 */

 export default (context, Vuex) => {
    var initialState = {}

    const store = new Vuex.Store({
        state: Object.assign({}, initialState),
        modules: {
            settings: settingsModule,
            revisions: revisionsModule,
            revision: revisionModule,
            user: userModule,
            validator: validatorModule,
            warnings: warningsModule,
            mrns: mrnsModule,
            metadata: metadataModule,
        },
        mutations: {},
        actions: {
            /**
             * select a revision adn update all settings with it's data 
             * 
             * @param {object} context 
             * @param {object} revision
             */
            selectRevision(context, revision) {
                const creator = revision.getCreator()
                const settings = {
                    user_id: creator.id,
                    request_id: revision.getRequestID(),
                    dateMin: revision.dateMin,
                    dateMax: revision.dateMax,
                    fields: revision.fields,
                    mrns: revision.mrns,
                }
                context.dispatch('revision/set', settings)
                context.dispatch('revision/setReference', revision)
                // set the list of MRNs
                const {fetchable_mrns} = revision.metadata
                context.dispatch('mrns/setList', fetchable_mrns)
            },
        },
        getters: {
            settings(state) {
                const { revision: { user_id, request_id,  dateMin, dateMax, mrns, fields } } = state
                return { user_id, request_id, dateMin, dateMax, mrns, fields }
            },
        },
    })
    return store
 }