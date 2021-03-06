<?php


/**
 * This class adds structure of 'resource_attribute_version_hash' table to 'propel' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfPropelVersionableBehaviorPlugin.lib.model.map
 */
class ResourceAttributeVersionHashMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfPropelVersionableBehaviorPlugin.lib.model.map.ResourceAttributeVersionHashMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(ResourceAttributeVersionHashPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ResourceAttributeVersionHashPeer::TABLE_NAME);
		$tMap->setPhpName('ResourceAttributeVersionHash');
		$tMap->setClassname('ResourceAttributeVersionHash');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignPrimaryKey('RESOURCE_ATTRIBUTE_VERSION_ID', 'ResourceAttributeVersionId', 'INTEGER' , 'resource_attribute_version', 'ID', true, 11);

		$tMap->addForeignPrimaryKey('RESOURCE_VERSION_ID', 'ResourceVersionId', 'INTEGER' , 'resource_version', 'ID', true, 11);

		$tMap->addColumn('IS_MODIFIED', 'IsModified', 'BOOLEAN', false, null);

	} // doBuild()

} // ResourceAttributeVersionHashMapBuilder
