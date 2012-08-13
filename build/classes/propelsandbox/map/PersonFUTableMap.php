<?php



/**
 * This class defines the structure of the 'persons' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.propelsandbox.map
 */
class PersonFUTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelsandbox.map.PersonFUTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return     void
     * @throws     PropelException
     */
    public function initialize()
    {
      // attributes
        $this->setName('persons');
        $this->setPhpName('PersonFU');
        $this->setClassname('PersonFU');
        $this->setPackage('propelsandbox');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('ROLE', 'Role', 'VARCHAR', true, 255, null);
        // validators
    }

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    $this->addRelation('Moviespersons', 'Moviespersons', RelationMap::ONE_TO_MANY, array('id' => 'personId', ), null, null);
    $this->addRelation('Movie', 'Movie', RelationMap::MANY_TO_MANY, array(), null, null);
    }

    /**
     * 
     * Gets the list of behaviors registered for this table
     * 
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '4', 'strip_comments' => 'false', ),
        );
    }

}
