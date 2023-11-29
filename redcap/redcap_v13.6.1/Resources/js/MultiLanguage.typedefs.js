/* Multi-Language Management - Type Definitions */

/**
 * @typedef REDCap
 * @type {{
 *  MultiLanguage: MultiLanguage
 * }}
 */

/**
 * @typedef MultiLanguage
 * @type {{
 *  init?: function(Object):void
 * }}
 */

/**
 * @typedef MultiLanguageConfig
 * @type {{
 *  mode: 'Project' | 'System'
 *  ajax: AjaxConfig
 *  settings: Settings
 *  uiMeta: Object<string,UserInterfaceMetadata>
 *  uiSubheadings: Object<string, string>
 *  projMeta: ProjectMetadata
 *  stats: Object
 *  snapshots: boolan | Object<int,SnapshotData>
 *  csvDelimiter: string
 * }}
 */

/**
 * @typedef UserInterfaceMetadata
 * @type {{
 *  id: string
 *  category: string
 *  group: string
 *  default: string|boolean
 *  prompt: string
 *  type: "string"|"bool"
 *  refHash: string|null
 * }}
 */

/**
 * @typedef ProjectMetadata
 * @type {{
 *  alerts: Object<string, AlertsMetadata>
 *  asis: Object<string, ASIMetadata>
 *  events: Object<string, EventMetadata>
 *  forms: Object<string, FormMetadata>
 *  fields: Object<string, FieldMetadata>
 *  longitudinal: boolean
 *  matrixGroups: Object<string, MatrixGroupMetadata>
 *  mdcs: Object<string, ReferenceData>
 *  pid: string
 *  pdfCustomizations: Object<string,<Object<string, ReferenceData>>
 *  protectedMail: Object<string, Object<string, ReferenceData>>
 *  refMap: Object
 *  surveyQueue: SurveyQueueMetadata
 *  surveys: Object<string, SurveyMetadata>
 *  surveysEnabled: boolean
 *  fieldTypes: FieldTypeMetadataCollection
 *  emptyHash: string
 * }}
 */

/**
 * @typedef EventMetadata
 * @type {{
 *  'event-name': ReferenceData
 *  'event-custom_event_label': ReferenceData
 *  uniqueEventName: string
 *  id: int
 *  armNum: int
 *  armId: int
 *  armName: string
 * }}
 */


/**
 * @typedef ReferenceData
 * @type {{
 *  reference: string
 *  refHash: string|null
 *  title?: string
 *  mode?: string
 *  prompt: string|null
 * }}
 */

/**
 * @typedef MatrixGroupMetadata
 * @type {{
 *   fields: Object<string, boolean>
 *   form: string
 *   'matrix-enum': Object<string, ReferenceData>
 *   'matrix-header': ReferenceData
 * }}
 */

/**
 * @typedef SurveyQueueMetadata
 * @type {{
 *  'sq-survey_auth_custom_message': ReferenceData
 *  'sq-survey_queue_custom_text': ReferenceData
 * }}
 */


/**
 * @typedef ASIMetadata
 * @type {{
 *  event_id: Number
 *  survey_id: Number
 *  form: string
 *  'asi-email_sender_display': ReferenceData
 *  'asi-email_subject': ReferenceData
 *  'asi-email_content': ReferenceData
 * }}
 */

/**
 * @typedef AlertsMetadata
 * @type {{
 *  id: Number
 *  alertNum: string
 *  'pid-pk': string
 *  title: string
 *  type: string
 *  uniqueId: string
 *  'alert-email_from_display': ReferenceData
 *  'alert-email_subject': ReferenceData
 *  'alert-alert_message': ReferenceData
 * }}
 */

/**
 * @typedef AlertsImportData
 * @type {{
 *  id: string
 *  title: string
 *  'pid-pk': string
 *  settings: Object[]
 * }}
 */


/**
 * @typedef FieldTypeMetadataCollection
 * @type {{
 *  actiontag: FieldTypeMetadata
 *  matrix: FieldTypeMetadata
 *  header: FieldTypeMetadata
 *  text: FieldTypeMetadata
 *  textarea: FieldTypeMetadata
 *  calc: FieldTypeMetadata
 *  select: FieldTypeMetadata
 *  radio: FieldTypeMetadata
 *  checkbox: FieldTypeMetadata
 *  yesno: FieldTypeMetadata
 *  truefalse: FieldTypeMetadata
 *  file: FieldTypeMetadata
 *  slider: FieldTypeMetadata
 *  descriptive: FieldTypeMetadata
 *  sql: FieldTypeMetadata
 *  formstatus: FieldTypeMetadata
 *  mdc: FieldTypeMetadata
 * }}
 */

/**
 * @typedef FieldTypeMetadata
 * @type {{
 *  value: string
 *  colHeader: string
 *  label: string
 *  note: string
 *  video_url: string
 *  header: string
 *  enum: string
 *  enumLabels: Object<string, string>
 * }}
 */

/**
 * @typedef FormMetadata
 * @type {{
 *  'form-name': ReferenceData
 *  numFields: Number
 *  isSurvey: bool
 *  isPROMIS: bool
 *  isFromSharedLibrary: bool
 *  fields: Object<number, string>
 * }}
 */
/**
 * @typedef FieldMetadata
 * @type {{
 *  formName: string
 *  type: string
 *  isPROMIS: boolean
 *  validation: string
 *  'field-label': ReferenceData,
 *  'field-enum': Object<string, ReferenceData>
 *  'field-note': ReferenceData
 *  'field-header': ReferenceData
 *  misc: string
 *  'field-video_url': ReferenceData
 *  'field-actiontag': Object<string, ActionTagMetadata>
 *  matrix: string
 * }}
 */
/**
 * @typedef ActionTagMetadata
 * @type {{
 *  tag: string
 *  reference: string
 *  refHash: string|null
 * }}
 */
/**
 * @typedef SurveyMetadata
 * @type {{
 *  id: int
 *  hasASIs: boolean
 *  asis: Object<int, string>
 *  acknowledgement: SurveyMetadataElement
 *  confirmation_email_content: SurveyMetadataElement
 *  confirmation_email_from_display: SurveyMetadataElement
 *  confirmation_email_subject: SurveyMetadataElement
 *  end_survey_redirect_url: SurveyMetadataElement
 *  offline_instructions: SurveyMetadataElement
 *  response_limit_custom_text: SurveyMetadataElement
 *  stop_action_acknowledgement: SurveyMetadataElement
 *  text_to_speech: SurveyMetadataElement
 *  text_to_speech_language: SurveyMetadataElement
 *  title: SurveyMetadataElement
 * }}
 */

/**
 * @typedef SurveyMetadataElement
 * @type {{
 *  name: string
 *  reference: string
 *  refHash: string|null
 *  prompt: string
 *  title: string
 *  disabled: bool
 *  select: Object<string, string>
 *  mode: string
 * }}
 */

/**
 * @typedef TranslationDataElement
 * @type {{
 *  translation: string
 *  refHash: string|null
 * }}
 */

/**
 * @typedef Settings
 * @type {{
 *  designatedField: string
 *  version: string
 *  debug: boolean
 *  disabled: boolean
 *  'admin-disabled': boolean
 *  'admin-enabled': boolean
 *  recordIdName: string
 *  projectId: string
 *  projMetaHash: string,
 *  highlightMissingDataentry: boolean
 *  highlightMissingSurvey: boolean
 *  autoDetectBrowserLang: boolean
 *  refLang: string
 *  initialLang: string
 *  fallbackLang: string
 *  langs: Object<string, Language>
 *  excludedAlerts: Object<string, boolean>
 *  alertSources: Object<string, string>
 *  asiSources: Object<string, string>
 *  excludedFields: Object<string, boolean>
 *  excludedSettings: Object<string, Object<string,boolean>>
 *  status: 'dev'|'draft'|'prod'|'system'
 *  usageStats: Object|null

 * }}
 */
/**
 * @typedef AjaxConfig
 * @type {{
 *  verification: string
 *  endpoint: string
 *  csrfToken: string
 * }}
 */
/** 
 * @typedef Language
 * @type {{
 *  key: string
 *  display: string
 *  sort: string
 *  rtl: boolean
 *  active?: boolean
 *  ui: Object<string,UITranslation>
 *  dd: Object
 * }}
 */

/** 
 * @typedef ChangedItemInfo
 * @type {{
 *  name: string
 *  type: string
 *  index: string
 *  prompt: string|null
 *  default: string
 *  translation: string
 *  langKey: string
 * }}
 */

/** 
 * @typedef UITranslation
 * @type {{
 *  translation: string|bool
 *  refHash: string|null
 * }}
 */


/**
 * @typedef Mapping
 * @type {{
 * jsKey: string
 * configKey: string
 * type: string
 * default: string | boolean
 * translation: boolean
 * prompt: string
 * category: string
 * }}
 */
/** 
 * @typedef AddEditImportModal
 * @type {{
 *  _$: JQuery
 *  _modal: Object
 *  _$importlink: JQuery<HTMLElement>
 *  _$fileradio: JQuery<HTMLElement>
 *  _$file: JQuery<HTMLElement>
 *  _$sysradio: JQuery<HTMLElement>
 *  _$sys: JQuery<HTMLElement>
 *  _$cancel: JQuery<HTMLElement>
 *  _$save: JQuery<HTMLElement>
 *  _$import: JQuery<HTMLElement>
 *  _lang: Language|null
 *  _mode: string
 *  _langKey: string
 *  _importVisible: boolean
 *  _importedLang?: LangExport
 * }}
 */
/** 
 * @typedef GSImportModal
 * @type {{
 *  _$: JQuery
 *  _modal: Object
 *  _$file: JQuery<HTMLElement>
 *  _$customFile: JQuery<HTMLElement>
 *  _$cancel: JQuery<HTMLElement>
 *  _$import: JQuery<HTMLElement>
 *  _settings: GeneralSettings
 *  setup: function():void
 *  show: function():void
 *  _readFile: function(JQuery.TriggeredEvent):void
 *  _updateImportButtonState: function():void
 *  _updateFileWidget: function():void
 *  _processFile: function(string, string):Promise<GeneralSettings>
 *  _import: function():void
 * }}
 */
/** 
 * @typedef GeneralSettings
 * @type {{
 *  creator?: string
 *  langActive?: object
 *  designatedField?: string
 *  debug?: boolean
 *  refLang?: string
 *  fallbackLang?: string
 *  disabled?: boolean
 *  highlightMissingDataentry?: boolean
 *  highlightMissingSurvey?: boolean
 *  autoDetectBrowserLang?: boolean
 *  dataEntryEnabled?: object
 *  surveyEnabled?: object
 *  excludedSettings?: object
 *  excludedFields?: object
 *  excludedAlerts?: object
 *  alertSources?: object
 *  asiSources?: object
* }}
 */


/**
 * @typedef DeleteModal
 * @type {{
 *  _$: JQuery
 *  _modal: Object
 *  _langKey: string
 *  init: function(JQuery | string):void
 *  show: function(string):void
 *  act: function(JQuery.TriggeredEvent):void
 *  delete: function(string):void
 * }}
 */
/**
 * @typedef DeleteSnapshotModal
 * @type {{
 *  _$: JQuery
 *  _modal: Object
 *  _snapshotId: string
 *  init: function(JQuery | string):void
 *  show: function(string):void
 *  act: function(JQuery.TriggeredEvent):void
 * }}
 */
/**
 * @typedef ExportModal
 * @type {{
 *  _$: JQuery
 *  _modal: Object
 *  _langKey: string
 *  _mode: string
 *  _form: string
 *  _promise: Promise<any>|null
 *  _close: function(any)|null
 *  init: function(JQuery | string):void
 *  show: function(string,string,string):Promise<any>
 *  act: function(JQuery.TriggeredEvent):void
 *  download: function():void
 * }}
 */

/**
 * @typedef FallThroughHeader
 * @type {{
 *  reference: string
 *  fieldName: string
 *  fieldNum: number
 * }}
 */

/**
 * @typedef ActionTagTranslation
 * @type {{
 *  value: string
 *  id: string
 *  hash: string
 * }}
 */

/**
 * @typedef MultiLanguageData
 * @type {{
 *  debug: boolean
 *  mode: string
 *  langs: Object<string, Language>
 *  numLangs: integer
 *  highlightMissing: boolean
 *  autoDetectBrowserLang: boolean
 * }}
 */

/**
 * @typedef RichTextEditorData
 * @type {{
 *  lang: Language
 *  name: string
 *  type: string
 *  index: string
 *  mode: string
 *  $textarea: JQuery<HTMLElement>
 * }}
 */

/**
 * @typedef RichTextEditorModal
 * @type {{
 *  _$: JQuery<HTMLElement>
 *  _modal: Object
 *  _initialized: boolean
 *  _$editor: JQuery<HTMLElement>
 *  _$title: JQuery<HTMLElement>
 *  _data: RichTextEditorData|null
 *  _editorSelector: string
 *  init: function()
 *  show: function(RichTextEditorData)
 *  act: function(JQuery.ClickEvent)
 *  _initRTE: function()
 *  _removeRTE: function()
 *  _pasteIntoRTE: function(string)
 * }}
 */

/**
 * @typedef SingleItemTranslationModal
 * @type {{
 *  _$: JQuery<HTMLElement>
 *  _modal: Object
 *  _initialized: boolean
 *  _$textarea: JQuery<HTMLElement>
 *  _$input: JQuery<HTMLElement>
 *  _$editor: JQuery<HTMLElement>
 *  _$title: JQuery<HTMLElement>
 *  _$ref: JQuery<HTMLElement>
 *  _data: SingleItemTranslationData|null
 *  init: function()
 *  show: function(SingleItemTranslationData)
 *  act: function(JQuery.ClickEvent)
 *  _initRTE: function()
 *  _removeRTE: function()
 *  _pasteIntoRTE: function(string)
 * }}
 */

/**
 * @typedef SingleItemTranslationData
 * @type {{
 *  mode: 'rte'|'single'|'multiline'
 *  lang: Language
 *  title: string
 *  name: string
 *  type: string
 *  index: string
 *  value: string
 *  reference: string
 *  refHash: string|null
 *  done: function(string)
 * }}
 */


/**
 * @typedef SnapshotData
 * @type {{
 *  id: int
 *  created_ts: string
 *  created_by: string
 *  deleted_ts: string
 *  deleted_by: string
 *  link: string
 * }}
 */

