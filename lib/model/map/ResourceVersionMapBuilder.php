<?php


/**
 * This class adds structure of 'resource_version' table to 'propel' DatabaseMap object.
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
class ResourceVersionMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfPropelVersionableBehaviorPlugin.lib.model.map.ResourceVersionMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ResourceVersionPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ResourceVersionPeer::TABLE_NAME);
		$tMap->setPhpName('ResourceVersion');
		$tMap->setClassname('ResourceVersion');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('RESOURCE_ID', 'ResourceId', 'INTEGER', true, null);

		$tMap->addColumn('RESOURCE_NAME', 'ResourceName', 'VARCHAR', true, 255);

		$tMap->addColumn('NUMBER', 'Number', 'INTEGER', false, 11);

		$tMap->addColumn('TITLE', 'Title', 'VARCHAR', false, 255);

		$tMap->addColumn('COMMENT', 'Comment', 'LONGVARCHAR', false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'VARCHAR', false, 255);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addForeignKey('RESOURCE_VERSION_ID', 'ResourceVersionId', 'INTEGER', 'resource_version', 'ID', false, 11);

	} // doBuild()

} // ResourceVersionMapBuilder
