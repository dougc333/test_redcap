<template>
  <section class="card detail" v-if="revision">
    <div class="card-header">
      <header>
        <RevisionMetadata :revision="revision" />
        <RevisionImportExport class="revision-import-export"/>
        <slot name="header"></slot>
      </header>
    </div>
    <div class="card-body">
      <main>
        <section>
          <h5 class="card-title">
            <font-awesome-icon :icon="['fas', 'calendar-week']" fixed-width/>
            <span class="ms-2">Range of time from which to pull data</span>
          </h5>
          <DateRangeInfo :min="revision.dateMin" :max="revision.dateMax"/>
        </section>
        <section>
          <h5 class="card-title">
            <font-awesome-icon :icon="['fas', 'tasks']" fixed-width/>
            <span class="ms-2">Fields in EHR for which to pull data</span>
          </h5>
          <MappedFhirResourcesPanel />
        </section>
        <section class="revisions" v-if="showMrns">
          <h5 class="card-title">
            <font-awesome-icon :icon="['fas', 'clipboard-list']" fixed-width/>
            <span class="ms-2">Medical record numbers of patients in EHR for which to create records on revision approval</span>
          </h5>
          <MRNList :list="revision.mrns"/>
        </section>
      </main>

      <footer>
        <slot name="footer"></slot>
      </footer>
    </div>
  </section>
</template>

<script>
import {formatDate, humanReadableDate} from '@/libraries/utils'
import RevisionImportExport from '@/components/RevisionImportExport'
import RevisionMetadata from '@/components/RevisionMetadata'
import DateRangeInfo from '@/components/DateRangeInfo'
import MRNList from '@/components/MRNList'
import MappedFhirResourcesPanel from '@/components/MappedFhirResources/Panel'

export default {
  name: 'RevisionDetail',
  components: {
    RevisionImportExport,
    RevisionMetadata,
    DateRangeInfo,
    MRNList,
    MappedFhirResourcesPanel,
  },
  props: {
    revision: {
      type: Object,
      default: () => ({})
    }
  },
  computed: {
    creationDate() {
      return formatDate(this.revision.metadata.date, 'MM-DD-YYYY hh:mm:ss')
    },
    readableCreationDate() {
      return humanReadableDate(this.revision.metadata.date)
    },
    user() {
      return this.revision.metadata.creator
    },
    /**
     * show MRN list only if revision is not approved and MRNs are available in this revision
     */
    showMrns() {
      try {
        const  mrns = this.revision.getTotaltMrns()
        // return (!approved && mrns.length>0 )
        return ( mrns>0 )
      } catch (error) {
        return false
      }

    },
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
header {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: flex-start;
}
header a {
  font-size: inherit;
}
header .subtitle {
  font-style: italic;
  font-size: .8rem;
}
main section + section {
  margin-top: 30px;
}
main h5 {
  color: #030399;
}
section.revisions {
  display: none;
}
@media only screen and (max-width: 768px) {
  header {
    flex-direction: column;
  }
  header > * + * {
    margin-top: 15px;
  }
  .revision-import-export {
    align-self: flex-start;
  }
}
</style>
