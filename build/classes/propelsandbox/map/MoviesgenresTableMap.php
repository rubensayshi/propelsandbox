<?php



/**
 * This class defines the structure of the 'moviesGenres' table.
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
class MoviesgenresTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'propelsandbox.map.MoviesgenresTableMap';

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
		$this->setName('moviesGenres');
		$this->setPhpName('Moviesgenres');
		$this->setClassname('Moviesgenres');
		$this->setPackage('propelsandbox');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('MOVIEID', 'Movieid', 'INTEGER' , 'movies', 'ID', true, 10, null);
		$this->addForeignPrimaryKey('GENREID', 'Genreid', 'INTEGER' , 'genres', 'ID', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Movie', 'Movie', RelationMap::MANY_TO_ONE, array('movieId' => 'id', ), null, null);
    $this->addRelation('Genre', 'Genre', RelationMap::MANY_TO_ONE, array('genreId' => 'id', ), null, null);
	} // buildRelations()

} // MoviesgenresTableMap
