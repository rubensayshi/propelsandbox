<?php


/**
 * Base class that represents a query for the 'moviesGenres' table.
 *
 * 
 *
 * @method     MoviesgenresQuery orderByMovieid($order = Criteria::ASC) Order by the movieId column
 * @method     MoviesgenresQuery orderByGenreid($order = Criteria::ASC) Order by the genreId column
 *
 * @method     MoviesgenresQuery groupByMovieid() Group by the movieId column
 * @method     MoviesgenresQuery groupByGenreid() Group by the genreId column
 *
 * @method     MoviesgenresQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MoviesgenresQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MoviesgenresQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MoviesgenresQuery leftJoinMovie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Movie relation
 * @method     MoviesgenresQuery rightJoinMovie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Movie relation
 * @method     MoviesgenresQuery innerJoinMovie($relationAlias = null) Adds a INNER JOIN clause to the query using the Movie relation
 *
 * @method     MoviesgenresQuery leftJoinGenre($relationAlias = null) Adds a LEFT JOIN clause to the query using the Genre relation
 * @method     MoviesgenresQuery rightJoinGenre($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Genre relation
 * @method     MoviesgenresQuery innerJoinGenre($relationAlias = null) Adds a INNER JOIN clause to the query using the Genre relation
 *
 * @method     Moviesgenres findOne(PropelPDO $con = null) Return the first Moviesgenres matching the query
 * @method     Moviesgenres findOneOrCreate(PropelPDO $con = null) Return the first Moviesgenres matching the query, or a new Moviesgenres object populated from the query conditions when no match is found
 *
 * @method     Moviesgenres findOneByMovieid(int $movieId) Return the first Moviesgenres filtered by the movieId column
 * @method     Moviesgenres findOneByGenreid(int $genreId) Return the first Moviesgenres filtered by the genreId column
 *
 * @method     array findByMovieid(int $movieId) Return Moviesgenres objects filtered by the movieId column
 * @method     array findByGenreid(int $genreId) Return Moviesgenres objects filtered by the genreId column
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BaseMoviesgenresQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMoviesgenresQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propelsandbox', $modelName = 'Moviesgenres', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MoviesgenresQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MoviesgenresQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MoviesgenresQuery) {
			return $criteria;
		}
		$query = new MoviesgenresQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$movieId, $genreId] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Moviesgenres|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MoviesgenresPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(MoviesgenresPeer::MOVIEID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(MoviesgenresPeer::GENREID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(MoviesgenresPeer::MOVIEID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(MoviesgenresPeer::GENREID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the movieId column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMovieid(1234); // WHERE movieId = 1234
	 * $query->filterByMovieid(array(12, 34)); // WHERE movieId IN (12, 34)
	 * $query->filterByMovieid(array('min' => 12)); // WHERE movieId > 12
	 * </code>
	 *
	 * @see       filterByMovie()
	 *
	 * @param     mixed $movieid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function filterByMovieid($movieid = null, $comparison = null)
	{
		if (is_array($movieid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MoviesgenresPeer::MOVIEID, $movieid, $comparison);
	}

	/**
	 * Filter the query on the genreId column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByGenreid(1234); // WHERE genreId = 1234
	 * $query->filterByGenreid(array(12, 34)); // WHERE genreId IN (12, 34)
	 * $query->filterByGenreid(array('min' => 12)); // WHERE genreId > 12
	 * </code>
	 *
	 * @see       filterByGenre()
	 *
	 * @param     mixed $genreid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function filterByGenreid($genreid = null, $comparison = null)
	{
		if (is_array($genreid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MoviesgenresPeer::GENREID, $genreid, $comparison);
	}

	/**
	 * Filter the query by a related Movie object
	 *
	 * @param     Movie|PropelCollection $movie The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function filterByMovie($movie, $comparison = null)
	{
		if ($movie instanceof Movie) {
			return $this
				->addUsingAlias(MoviesgenresPeer::MOVIEID, $movie->getId(), $comparison);
		} elseif ($movie instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MoviesgenresPeer::MOVIEID, $movie->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByMovie() only accepts arguments of type Movie or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Movie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function joinMovie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Movie');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Movie');
		}
		
		return $this;
	}

	/**
	 * Use the Movie relation Movie object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MovieQuery A secondary query class using the current class as primary query
	 */
	public function useMovieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMovie($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Movie', 'MovieQuery');
	}

	/**
	 * Filter the query by a related Genre object
	 *
	 * @param     Genre|PropelCollection $genre The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function filterByGenre($genre, $comparison = null)
	{
		if ($genre instanceof Genre) {
			return $this
				->addUsingAlias(MoviesgenresPeer::GENREID, $genre->getId(), $comparison);
		} elseif ($genre instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MoviesgenresPeer::GENREID, $genre->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByGenre() only accepts arguments of type Genre or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Genre relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function joinGenre($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Genre');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Genre');
		}
		
		return $this;
	}

	/**
	 * Use the Genre relation Genre object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GenreQuery A secondary query class using the current class as primary query
	 */
	public function useGenreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGenre($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Genre', 'GenreQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Moviesgenres $moviesgenres Object to remove from the list of results
	 *
	 * @return    MoviesgenresQuery The current query, for fluid interface
	 */
	public function prune($moviesgenres = null)
	{
		if ($moviesgenres) {
			$this->addCond('pruneCond0', $this->getAliasedColName(MoviesgenresPeer::MOVIEID), $moviesgenres->getMovieid(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(MoviesgenresPeer::GENREID), $moviesgenres->getGenreid(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseMoviesgenresQuery
