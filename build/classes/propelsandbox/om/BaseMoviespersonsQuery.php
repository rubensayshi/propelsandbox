<?php


/**
 * Base class that represents a query for the 'moviesPersons' table.
 *
 * 
 *
 * @method     MoviespersonsQuery orderByMovieid($order = Criteria::ASC) Order by the movieId column
 * @method     MoviespersonsQuery orderByPersonid($order = Criteria::ASC) Order by the personId column
 *
 * @method     MoviespersonsQuery groupByMovieid() Group by the movieId column
 * @method     MoviespersonsQuery groupByPersonid() Group by the personId column
 *
 * @method     MoviespersonsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MoviespersonsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MoviespersonsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MoviespersonsQuery leftJoinMovie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Movie relation
 * @method     MoviespersonsQuery rightJoinMovie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Movie relation
 * @method     MoviespersonsQuery innerJoinMovie($relationAlias = null) Adds a INNER JOIN clause to the query using the Movie relation
 *
 * @method     MoviespersonsQuery leftJoinPerson($relationAlias = null) Adds a LEFT JOIN clause to the query using the Person relation
 * @method     MoviespersonsQuery rightJoinPerson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Person relation
 * @method     MoviespersonsQuery innerJoinPerson($relationAlias = null) Adds a INNER JOIN clause to the query using the Person relation
 *
 * @method     Moviespersons findOne(PropelPDO $con = null) Return the first Moviespersons matching the query
 * @method     Moviespersons findOneOrCreate(PropelPDO $con = null) Return the first Moviespersons matching the query, or a new Moviespersons object populated from the query conditions when no match is found
 *
 * @method     Moviespersons findOneByMovieid(int $movieId) Return the first Moviespersons filtered by the movieId column
 * @method     Moviespersons findOneByPersonid(int $personId) Return the first Moviespersons filtered by the personId column
 *
 * @method     array findByMovieid(int $movieId) Return Moviespersons objects filtered by the movieId column
 * @method     array findByPersonid(int $personId) Return Moviespersons objects filtered by the personId column
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BaseMoviespersonsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMoviespersonsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propelsandbox', $modelName = 'Moviespersons', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MoviespersonsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MoviespersonsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MoviespersonsQuery) {
			return $criteria;
		}
		$query = new MoviespersonsQuery();
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
	 * @param     array[$movieId, $personId] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Moviespersons|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MoviespersonsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(MoviespersonsPeer::MOVIEID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(MoviespersonsPeer::PERSONID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(MoviespersonsPeer::MOVIEID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(MoviespersonsPeer::PERSONID, $key[1], Criteria::EQUAL);
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
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function filterByMovieid($movieid = null, $comparison = null)
	{
		if (is_array($movieid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MoviespersonsPeer::MOVIEID, $movieid, $comparison);
	}

	/**
	 * Filter the query on the personId column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPersonid(1234); // WHERE personId = 1234
	 * $query->filterByPersonid(array(12, 34)); // WHERE personId IN (12, 34)
	 * $query->filterByPersonid(array('min' => 12)); // WHERE personId > 12
	 * </code>
	 *
	 * @see       filterByPerson()
	 *
	 * @param     mixed $personid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function filterByPersonid($personid = null, $comparison = null)
	{
		if (is_array($personid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MoviespersonsPeer::PERSONID, $personid, $comparison);
	}

	/**
	 * Filter the query by a related Movie object
	 *
	 * @param     Movie|PropelCollection $movie The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function filterByMovie($movie, $comparison = null)
	{
		if ($movie instanceof Movie) {
			return $this
				->addUsingAlias(MoviespersonsPeer::MOVIEID, $movie->getId(), $comparison);
		} elseif ($movie instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MoviespersonsPeer::MOVIEID, $movie->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    MoviespersonsQuery The current query, for fluid interface
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
	 * Filter the query by a related Person object
	 *
	 * @param     Person|PropelCollection $person The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function filterByPerson($person, $comparison = null)
	{
		if ($person instanceof Person) {
			return $this
				->addUsingAlias(MoviespersonsPeer::PERSONID, $person->getId(), $comparison);
		} elseif ($person instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(MoviespersonsPeer::PERSONID, $person->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByPerson() only accepts arguments of type Person or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Person relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function joinPerson($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Person');
		
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
			$this->addJoinObject($join, 'Person');
		}
		
		return $this;
	}

	/**
	 * Use the Person relation Person object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersonQuery A secondary query class using the current class as primary query
	 */
	public function usePersonQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPerson($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Person', 'PersonQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Moviespersons $moviespersons Object to remove from the list of results
	 *
	 * @return    MoviespersonsQuery The current query, for fluid interface
	 */
	public function prune($moviespersons = null)
	{
		if ($moviespersons) {
			$this->addCond('pruneCond0', $this->getAliasedColName(MoviespersonsPeer::MOVIEID), $moviespersons->getMovieid(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(MoviespersonsPeer::PERSONID), $moviespersons->getPersonid(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseMoviespersonsQuery
