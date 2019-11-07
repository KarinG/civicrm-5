<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Core/Job.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:143980edb0346c065249ee860efe6b41)
 */

/**
 * Database access object for the Job entity.
 */
class CRM_Core_DAO_Job extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_job';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Job Id
   *
   * @var int
   */
  public $id;

  /**
   * Which Domain is this scheduled job for
   *
   * @var int
   */
  public $domain_id;

  /**
   * Scheduled job run frequency.
   *
   * @var string
   */
  public $run_frequency;

  /**
   * When was this cron entry last run
   *
   * @var timestamp
   */
  public $last_run;

  /**
   * When is this cron entry scheduled to run
   *
   * @var timestamp
   */
  public $scheduled_run_date;

  /**
   * Title of the job
   *
   * @var string
   */
  public $name;

  /**
   * Description of the job
   *
   * @var string
   */
  public $description;

  /**
   * Entity of the job api call
   *
   * @var string
   */
  public $api_entity;

  /**
   * Action of the job api call
   *
   * @var string
   */
  public $api_action;

  /**
   * List of parameters to the command.
   *
   * @var text
   */
  public $parameters;

  /**
   * Is this job active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_job';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Job ID'),
          'description' => ts('Job Id'),
          'required' => TRUE,
          'where' => 'civicrm_job.id',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Job Domain'),
          'description' => ts('Which Domain is this scheduled job for'),
          'required' => TRUE,
          'where' => 'civicrm_job.domain_id',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
        ],
        'run_frequency' => [
          'name' => 'run_frequency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Job Frequency'),
          'description' => ts('Scheduled job run frequency.'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'where' => 'civicrm_job.run_frequency',
          'default' => 'Daily',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::getJobFrequency',
          ],
        ],
        'last_run' => [
          'name' => 'last_run',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Last Run'),
          'description' => ts('When was this cron entry last run'),
          'required' => FALSE,
          'where' => 'civicrm_job.last_run',
          'default' => 'NULL',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'scheduled_run_date' => [
          'name' => 'scheduled_run_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Scheduled Run Date'),
          'description' => ts('When is this cron entry scheduled to run'),
          'required' => FALSE,
          'where' => 'civicrm_job.scheduled_run_date',
          'default' => 'NULL',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Job Name'),
          'description' => ts('Title of the job'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job.name',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Job Description'),
          'description' => ts('Description of the job'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job.description',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'api_entity' => [
          'name' => 'api_entity',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('API Entity'),
          'description' => ts('Entity of the job api call'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job.api_entity',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'api_action' => [
          'name' => 'api_action',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('API Action'),
          'description' => ts('Action of the job api call'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job.api_action',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
        'parameters' => [
          'name' => 'parameters',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('API Parameters'),
          'description' => ts('List of parameters to the command.'),
          'rows' => 4,
          'cols' => 60,
          'where' => 'civicrm_job.parameters',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Job Is Active?'),
          'description' => ts('Is this job active?'),
          'where' => 'civicrm_job.is_active',
          'table_name' => 'civicrm_job',
          'entity' => 'Job',
          'bao' => 'CRM_Core_BAO_Job',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'job', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'job', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
