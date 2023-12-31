<template>
  <div>

    <div class="card group columns-settings">
      <h6 class="card-header">Columns</h6>
      <div class="card-body">
        <div class="line">
          <input v-model="dates" type="checkbox" name="dates" value="true" id="export_dates">
          <label for="export_dates">
            <font-awesome-icon :icon="['fas', 'calendar-week']" fixed-width/>
            <span class="ms-2">Date range</span>
          </label>
        </div>
        <div class="line">
          <input v-model="fields" type="checkbox" name="fields" value="true" id="export_fields">
          <label for="export_fields">
            <font-awesome-icon :icon="['fas', 'tasks']" fixed-width/>
            <span class="ms-2">Fields</span>
          </label>
        </div>
      </div>
    </div>

    <div class="card group format-settings">
      <h6 class="card-header">Format:</h6>
      <div class="card-body">
        <select v-model="selected_format" name="format" id="export_format">
          <option value="" disabled>choose a format</option>
          <option :value="format" v-for="(format, index) in formats" :key="index" v-text="format"></option>
        </select>
        <select v-if="selected_format==='csv'" v-model="csv_delimiter">
          <option value=",">, (comma)</option>
          <option value="tab">\t (tab)</option>
          <option value=";">; (semi-colon)</option>
          <option value="|">| (pipe)</option>
          <option value="^">^ (caret)</option>
        </select>
      </div>
    </div>
    
    <!-- pass valid to parent -->
    <slot name="default" :valid="valid"></slot>


  </div>
</template>

<script>

/**
 * helper function to get the fields to export
 */
const getFields = ({fields,dates}) => {
  const keys = []
  if(fields) keys.push('fields')
  if(dates) keys.push('dateMin','dateMax')
  return keys
}

export default {
  data: () => ({
    fields: false,
    dates: false,
    formats: ['csv','json'],
    selected_format: 'csv',
    csv_delimiter: ','
  }),
  props: {
    revision: {
      type: Object,
      default: ()=>({})
    }
  },
  computed: {
    valid() { return (this.fields || this.dates)===true },
    settings() {
      const settings = ( ({fields,dates,selected_format:format}) => ({fields,dates,format}))(this.$data)
      if(settings.format==='csv') {
        settings.csv_delimiter = this.csv_delimiter
        if (settings.csv_delimiter=='tab') settings.csv_delimiter='\t'
      }
      return settings
    },
  },
  watch: {
    settings() {
      this.$emit('update', this.settings)
    }
  },
  methods: {
    validate() {
      return (this.fields || this.dates)===true
    },
    async exportRevision() {
      const {format, csv_delimiter=','} = this.settings
      const revision_id = this.revision.getID()
      const fields = getFields(this.settings)

      const exportURL = this.$API.getExportURL({revision_id, fields, format, csv_delimiter})
      const anchor = document.createElement('a')
      const fileName = `datamart_revision_${revision_id}.${format}`
      anchor.setAttribute("download", fileName)
      anchor.setAttribute("target", '_SELF')
      anchor.setAttribute("href", exportURL)
      anchor.innerText = 'download'
      // temporarily add the anchor to the DOM, click and remove it
      document.body.appendChild(anchor) // required for firefox
      anchor.click()
      anchor.remove()
    },
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.columns-settings {
  display: flex;
  flex-direction: column;
}
.group + .group {
  margin-top: 20px;
}
.line {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
}
.line > * {
  margin: auto 0;

}
.line > * + * {
  margin-left: 10px;
}
.line.vertical {
  flex-direction: column;
  align-items:flex-start;
}
input[type="checkbox"], label {
  cursor: pointer;
}
/* .checkboxes .group {
  display: flex;
  flex-direction: row;
}
.checkboxes .group :first-child {
  flex: 1;
}
.checkboxes .group :last-child {
  flex: 2;
} */
</style>
