<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Core/LocationType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:c3560b71c6b732aaa7febb2567fc1b9c)
 */

/**
 * Database access object for the LocationType entity.
 */
class CRM_Core_DAO_LocationType extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_location_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Location Type ID
   *
   * @var int
   */
  public $id;

  /**
   * Location Type Name.
   *
   * @var string
   */
  public $name;

  /**
   * Location Type Display Name.
   *
   * @var string
   */
  public $display_name;

  /**
   * vCard Location Type Name.
   *
   * @var string
   */
  public $vcard_name;

  /**
   * Location Type Description.
   *
   * @var string
   */
  public $description;

  /**
   * Is this location type a predefined system location?
   *
   * @var bool
   */
  public $is_reserved;

  /**
   * Is this property active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Is this location type the default?
   *
   * @var bool
   */
  public $is_default;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_location_type';
    parent::__construct();
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
          'title' => ts('Location Type ID'),
          'description' => ts('Location Type ID'),
          'required' => TRUE,
          'where' => 'civicrm_location_type.id',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Location Type'),
          'description' => ts('Location Type Name.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_location_type.name',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 0,
        ],
        'display_name' => [
          'name' => 'display_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Display Name'),
          'description' => ts('Location Type Display Name.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_location_type.display_name',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 1,
        ],
        'vcard_name' => [
          'name' => 'vcard_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('vCard Location Type'),
          'description' => ts('vCard Location Type Name.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_location_type.vcard_name',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 0,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description'),
          'description' => ts('Location Type Description.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_location_type.description',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 0,
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Location Type is Reserved?'),
          'description' => ts('Is this location type a predefined system location?'),
          'where' => 'civicrm_location_type.is_reserved',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Location Type is Active?'),
          'description' => ts('Is this property active?'),
          'where' => 'civicrm_location_type.is_active',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
          'localizable' => 0,
        ],
        'is_default' => [
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Default Location Type?'),
          'description' => ts('Is this location type the default?'),
          'where' => 'civicrm_location_type.is_default',
          'table_name' => 'civicrm_location_type',
          'entity' => 'LocationType',
          'bao' => 'CRM_Core_BAO_LocationType',
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'location_type', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'location_type', $prefix, []);
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
    $indices = [
      'UI_name' => [
        'name' => 'UI_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_location_type::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
