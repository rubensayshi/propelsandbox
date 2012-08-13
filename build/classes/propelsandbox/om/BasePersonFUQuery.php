<?php


/**
 * Base class that represents a query for the 'persons' table.
 *
 * 
 *
 * @method     PersonFUQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PersonFUQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     PersonFUQuery orderByRole($order = Criteria::ASC) Order by the role column
 *
 * @method     PersonFUQuery groupById() Group by the id column
 * @method     PersonFUQuery groupByName() Group by the name column
 * @method     PersonFUQuery groupByRole() Group by the role column
 *
 * @method     PersonFUQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonFUQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonFUQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonFUQuery leftJoinMoviespersons($relationAlias = null) Adds a LEFT JOIN clause to the query using the Moviespersons relation
 * @method     PersonFUQuery rightJoinMoviespersons($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Moviespersons relation
 * @method     PersonFUQuery innerJoinMoviespersons($relationAlias = null) Adds a INNER JOIN clause to the query using the Moviespersons relation
 *
 * @method     PersonFU findOne(PropelPDO $con = null) Return the first PersonFU matching the query
 * @method     PersonFU findOneOrCreate(PropelPDO $con = null) Return the first PersonFU matching the query, or a new PersonFU object populated from the query conditions when no match is found
 *
 * @method     PersonFU findOneById(int $id) Return the first PersonFU filtered by the id column
 * @method     PersonFU findOneByName(string $name) Return the first PersonFU filtered by the name column
 * @method     PersonFU findOneByRole(string $role) Return the first PersonFU filtered by the role column
 *
 * @method     array findById(int $id) Return PersonFU objects filtered by the id column
 * @method     array findByName(string $name) Return PersonFU objects filtered by the name column
 * @method     array findByRole(string $role) Return PersonFU objects filtered by the role column
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BasePersonFUQuery extends ModelCriteria
{

    /**
     * Initializes internal state of BasePersonFUQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propelsandbox', $modelName = 'PersonFU', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonFUQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    PersonFUQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonFUQuery)
        {
            return $criteria;
        }
        $query = new PersonFUQuery();
        if (null !== $modelAlias)
        {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria)
        {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PersonFU|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = PersonFUPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
        {
            // the object is alredy in the instance pool
            return $obj;
        }
        else
        {
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(PersonFUPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(PersonFUPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     * 
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison)
        {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(PersonFUPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     * 
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($name))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $name))
            {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PersonFUPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the role column
     * 
     * Example usage:
     * <code>
     * $query->filterByRole('fooValue');   // WHERE role = 'fooValue'
     * $query->filterByRole('%fooValue%'); // WHERE role LIKE '%fooValue%'
     * </code>
     *
     * @param     string $role The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterByRole($role = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($role))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $role))
            {
                $role = str_replace('*', '%', $role);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PersonFUPeer::ROLE, $role, $comparison);
    }

    /**
     * Filter the query by a related Moviespersons object
     *
     * @param     Moviespersons $moviespersons  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterByMoviespersons($moviespersons, $comparison = null)
    {
        if ($moviespersons instanceof Moviespersons)
        {
            return $this
                ->addUsingAlias(PersonFUPeer::ID, $moviespersons->getPersonid(), $comparison);
        }
        elseif ($moviespersons instanceof PropelCollection)
        {
            return $this
                ->useMoviespersonsQuery()
                    ->filterByPrimaryKeys($moviespersons->getPrimaryKeys())
                ->endUse();
        }
        else
        {
            throw new PropelException('filterByMoviespersons() only accepts arguments of type Moviespersons or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Moviespersons relation
     * 
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function joinMoviespersons($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Moviespersons');
        
        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin())
        {
            $join->setPreviousJoin($previousJoin);
        }
        
        // add the ModelJoin to the current object
        if($relationAlias)
        {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        }
        else
        {
            $this->addJoinObject($join, 'Moviespersons');
        }
        
        return $this;
    }

    /**
     * Use the Moviespersons relation Moviespersons object
     *
     * @see       useQuery()
     * 
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    MoviespersonsQuery A secondary query class using the current class as primary query
     */
    public function useMoviespersonsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMoviespersons($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Moviespersons', 'MoviespersonsQuery');
    }

    /**
     * Filter the query by a related Movie object
     * using the moviesPersons table as cross reference
     *
     * @param     Movie $movie the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function filterByMovie($movie, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useMoviespersonsQuery()
                ->filterByMovie($movie, $comparison)
            ->endUse();
    }
    
    /**
     * Exclude object from result
     *
     * @param     PersonFU $personFU Object to remove from the list of results
     *
     * @return    PersonFUQuery The current query, for fluid interface
     */
    public function prune($personFU = null)
    {
        if ($personFU)
        {
            $this->addUsingAlias(PersonFUPeer::ID, $personFU->getId(), Criteria::NOT_EQUAL);
      }
      
        return $this;
    }

}
