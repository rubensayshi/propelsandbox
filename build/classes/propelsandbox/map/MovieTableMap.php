<?php



/**
 * This class defines the structure of the 'movies' table.
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
class MovieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelsandbox.map.MovieTableMap';

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
        $this->setName('movies');
        $this->setPhpName('Movie');
        $this->setClassname('Movie');
        $this->setPackage('propelsandbox');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('PARENTID', 'ParentId', 'INTEGER', true, 10, null);
        $this->addColumn('ORIGINALTITLE', 'OriginalTitle', 'VARCHAR', true, 255, null);
        $this->addColumn('ORIGINALSUBTITLE', 'OriginalSubtitle', 'VARCHAR', true, 255, null);
        $this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
        $this->addColumn('SUBTITLE', 'Subtitle', 'VARCHAR', true, 255, null);
        $this->addColumn('STARTDATE', 'StartDate', 'DATE', true, null, null);
        $this->addColumn('FSK', 'Fsk', 'SMALLINT', true, 2, null);
        $this->addColumn('DIRECTORS', 'Directors', 'VARCHAR', true, 255, null);
        $this->addColumn('ACTORS', 'Actors', 'VARCHAR', true, 255, null);
        $this->addColumn('CAMERA', 'Camera', 'VARCHAR', true, 255, null);
        $this->addColumn('BOOK', 'Book', 'VARCHAR', true, 255, null);
        $this->addColumn('RENTAL', 'Rental', 'VARCHAR', true, 255, null);
        $this->addColumn('PRODUCERS', 'Producers', 'VARCHAR', true, 255, null);
        $this->addColumn('LENGTHINMINUTES', 'LengthInMinutes', 'SMALLINT', true, 3, null);
        $this->addColumn('CREATEDATE', 'CreateDate', 'DATE', true, null, null);
        $this->addColumn('PICTURE', 'Picture', 'VARCHAR', true, 255, null);
        $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('LANGUAGES', 'Languages', 'VARCHAR', true, 255, null);
        $this->addColumn('COUNTRIES', 'Countries', 'VARCHAR', true, 255, null);
        $this->addColumn('URL', 'Url', 'VARCHAR', true, 255, null);
        $this->addColumn('TRAILER', 'Trailer', 'VARCHAR', true, 255, null);
        $this->addColumn('LASTEDITTIME', 'LastEditTime', 'INTEGER', true, 10, null);
        // validators
    }

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    $this->addRelation('Moviesgenres', 'Moviesgenres', RelationMap::ONE_TO_MANY, array('id' => 'movieId', ), null, null);
    $this->addRelation('Moviespersons', 'Moviespersons', RelationMap::ONE_TO_MANY, array('id' => 'movieId', ), null, null);
    $this->addRelation('Genre', 'Genre', RelationMap::MANY_TO_MANY, array(), null, null);
    $this->addRelation('Person', 'Person', RelationMap::MANY_TO_MANY, array(), null, null);
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
