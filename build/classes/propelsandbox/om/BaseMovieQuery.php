<?php


/**
 * Base class that represents a query for the 'movies' table.
 *
 * 
 *
 * @method     MovieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MovieQuery orderByParentId($order = Criteria::ASC) Order by the parentId column
 * @method     MovieQuery orderByOriginalTitle($order = Criteria::ASC) Order by the originalTitle column
 * @method     MovieQuery orderByOriginalSubtitle($order = Criteria::ASC) Order by the originalSubtitle column
 * @method     MovieQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     MovieQuery orderBySubtitle($order = Criteria::ASC) Order by the subtitle column
 * @method     MovieQuery orderByStartDate($order = Criteria::ASC) Order by the startDate column
 * @method     MovieQuery orderByFsk($order = Criteria::ASC) Order by the fsk column
 * @method     MovieQuery orderByDirectors($order = Criteria::ASC) Order by the directors column
 * @method     MovieQuery orderByActors($order = Criteria::ASC) Order by the actors column
 * @method     MovieQuery orderByCamera($order = Criteria::ASC) Order by the camera column
 * @method     MovieQuery orderByBook($order = Criteria::ASC) Order by the book column
 * @method     MovieQuery orderByRental($order = Criteria::ASC) Order by the rental column
 * @method     MovieQuery orderByProducers($order = Criteria::ASC) Order by the producers column
 * @method     MovieQuery orderByLengthInMinutes($order = Criteria::ASC) Order by the lengthInMinutes column
 * @method     MovieQuery orderByCreateDate($order = Criteria::ASC) Order by the createDate column
 * @method     MovieQuery orderByPicture($order = Criteria::ASC) Order by the picture column
 * @method     MovieQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     MovieQuery orderByLanguages($order = Criteria::ASC) Order by the languages column
 * @method     MovieQuery orderByCountries($order = Criteria::ASC) Order by the countries column
 * @method     MovieQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     MovieQuery orderByTrailer($order = Criteria::ASC) Order by the trailer column
 * @method     MovieQuery orderByLastEditTime($order = Criteria::ASC) Order by the lastEditTime column
 *
 * @method     MovieQuery groupById() Group by the id column
 * @method     MovieQuery groupByParentId() Group by the parentId column
 * @method     MovieQuery groupByOriginalTitle() Group by the originalTitle column
 * @method     MovieQuery groupByOriginalSubtitle() Group by the originalSubtitle column
 * @method     MovieQuery groupByTitle() Group by the title column
 * @method     MovieQuery groupBySubtitle() Group by the subtitle column
 * @method     MovieQuery groupByStartDate() Group by the startDate column
 * @method     MovieQuery groupByFsk() Group by the fsk column
 * @method     MovieQuery groupByDirectors() Group by the directors column
 * @method     MovieQuery groupByActors() Group by the actors column
 * @method     MovieQuery groupByCamera() Group by the camera column
 * @method     MovieQuery groupByBook() Group by the book column
 * @method     MovieQuery groupByRental() Group by the rental column
 * @method     MovieQuery groupByProducers() Group by the producers column
 * @method     MovieQuery groupByLengthInMinutes() Group by the lengthInMinutes column
 * @method     MovieQuery groupByCreateDate() Group by the createDate column
 * @method     MovieQuery groupByPicture() Group by the picture column
 * @method     MovieQuery groupByDescription() Group by the description column
 * @method     MovieQuery groupByLanguages() Group by the languages column
 * @method     MovieQuery groupByCountries() Group by the countries column
 * @method     MovieQuery groupByUrl() Group by the url column
 * @method     MovieQuery groupByTrailer() Group by the trailer column
 * @method     MovieQuery groupByLastEditTime() Group by the lastEditTime column
 *
 * @method     MovieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MovieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MovieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MovieQuery leftJoinMoviesgenres($relationAlias = null) Adds a LEFT JOIN clause to the query using the Moviesgenres relation
 * @method     MovieQuery rightJoinMoviesgenres($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Moviesgenres relation
 * @method     MovieQuery innerJoinMoviesgenres($relationAlias = null) Adds a INNER JOIN clause to the query using the Moviesgenres relation
 *
 * @method     MovieQuery leftJoinMoviespersons($relationAlias = null) Adds a LEFT JOIN clause to the query using the Moviespersons relation
 * @method     MovieQuery rightJoinMoviespersons($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Moviespersons relation
 * @method     MovieQuery innerJoinMoviespersons($relationAlias = null) Adds a INNER JOIN clause to the query using the Moviespersons relation
 *
 * @method     Movie findOne(PropelPDO $con = null) Return the first Movie matching the query
 * @method     Movie findOneOrCreate(PropelPDO $con = null) Return the first Movie matching the query, or a new Movie object populated from the query conditions when no match is found
 *
 * @method     Movie findOneById(int $id) Return the first Movie filtered by the id column
 * @method     Movie findOneByParentId(int $parentId) Return the first Movie filtered by the parentId column
 * @method     Movie findOneByOriginalTitle(string $originalTitle) Return the first Movie filtered by the originalTitle column
 * @method     Movie findOneByOriginalSubtitle(string $originalSubtitle) Return the first Movie filtered by the originalSubtitle column
 * @method     Movie findOneByTitle(string $title) Return the first Movie filtered by the title column
 * @method     Movie findOneBySubtitle(string $subtitle) Return the first Movie filtered by the subtitle column
 * @method     Movie findOneByStartDate(string $startDate) Return the first Movie filtered by the startDate column
 * @method     Movie findOneByFsk(int $fsk) Return the first Movie filtered by the fsk column
 * @method     Movie findOneByDirectors(string $directors) Return the first Movie filtered by the directors column
 * @method     Movie findOneByActors(string $actors) Return the first Movie filtered by the actors column
 * @method     Movie findOneByCamera(string $camera) Return the first Movie filtered by the camera column
 * @method     Movie findOneByBook(string $book) Return the first Movie filtered by the book column
 * @method     Movie findOneByRental(string $rental) Return the first Movie filtered by the rental column
 * @method     Movie findOneByProducers(string $producers) Return the first Movie filtered by the producers column
 * @method     Movie findOneByLengthInMinutes(int $lengthInMinutes) Return the first Movie filtered by the lengthInMinutes column
 * @method     Movie findOneByCreateDate(string $createDate) Return the first Movie filtered by the createDate column
 * @method     Movie findOneByPicture(string $picture) Return the first Movie filtered by the picture column
 * @method     Movie findOneByDescription(string $description) Return the first Movie filtered by the description column
 * @method     Movie findOneByLanguages(string $languages) Return the first Movie filtered by the languages column
 * @method     Movie findOneByCountries(string $countries) Return the first Movie filtered by the countries column
 * @method     Movie findOneByUrl(string $url) Return the first Movie filtered by the url column
 * @method     Movie findOneByTrailer(string $trailer) Return the first Movie filtered by the trailer column
 * @method     Movie findOneByLastEditTime(int $lastEditTime) Return the first Movie filtered by the lastEditTime column
 *
 * @method     array findById(int $id) Return Movie objects filtered by the id column
 * @method     array findByParentId(int $parentId) Return Movie objects filtered by the parentId column
 * @method     array findByOriginalTitle(string $originalTitle) Return Movie objects filtered by the originalTitle column
 * @method     array findByOriginalSubtitle(string $originalSubtitle) Return Movie objects filtered by the originalSubtitle column
 * @method     array findByTitle(string $title) Return Movie objects filtered by the title column
 * @method     array findBySubtitle(string $subtitle) Return Movie objects filtered by the subtitle column
 * @method     array findByStartDate(string $startDate) Return Movie objects filtered by the startDate column
 * @method     array findByFsk(int $fsk) Return Movie objects filtered by the fsk column
 * @method     array findByDirectors(string $directors) Return Movie objects filtered by the directors column
 * @method     array findByActors(string $actors) Return Movie objects filtered by the actors column
 * @method     array findByCamera(string $camera) Return Movie objects filtered by the camera column
 * @method     array findByBook(string $book) Return Movie objects filtered by the book column
 * @method     array findByRental(string $rental) Return Movie objects filtered by the rental column
 * @method     array findByProducers(string $producers) Return Movie objects filtered by the producers column
 * @method     array findByLengthInMinutes(int $lengthInMinutes) Return Movie objects filtered by the lengthInMinutes column
 * @method     array findByCreateDate(string $createDate) Return Movie objects filtered by the createDate column
 * @method     array findByPicture(string $picture) Return Movie objects filtered by the picture column
 * @method     array findByDescription(string $description) Return Movie objects filtered by the description column
 * @method     array findByLanguages(string $languages) Return Movie objects filtered by the languages column
 * @method     array findByCountries(string $countries) Return Movie objects filtered by the countries column
 * @method     array findByUrl(string $url) Return Movie objects filtered by the url column
 * @method     array findByTrailer(string $trailer) Return Movie objects filtered by the trailer column
 * @method     array findByLastEditTime(int $lastEditTime) Return Movie objects filtered by the lastEditTime column
 *
 * @package    propel.generator.propelsandbox.om
 */
abstract class BaseMovieQuery extends ModelCriteria
{

    /**
     * Initializes internal state of BaseMovieQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propelsandbox', $modelName = 'Movie', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MovieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    MovieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MovieQuery)
        {
            return $criteria;
        }
        $query = new MovieQuery();
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
     * @return    Movie|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = MoviePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(MoviePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(MoviePeer::ID, $keys, Criteria::IN);
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
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison)
        {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(MoviePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the parentId column
     * 
     * Example usage:
     * <code>
     * $query->filterByParentId(1234); // WHERE parentId = 1234
     * $query->filterByParentId(array(12, 34)); // WHERE parentId IN (12, 34)
     * $query->filterByParentId(array('min' => 12)); // WHERE parentId > 12
     * </code>
     *
     * @param     mixed $parentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByParentId($parentId = null, $comparison = null)
    {
        if (is_array($parentId))
        {
            $useMinMax = false;
            if (isset($parentId['min']))
            {
                $this->addUsingAlias(MoviePeer::PARENTID, $parentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentId['max']))
            {
                $this->addUsingAlias(MoviePeer::PARENTID, $parentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax)
            {
                return $this;
            }
            if (null === $comparison)
            {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MoviePeer::PARENTID, $parentId, $comparison);
    }

    /**
     * Filter the query on the originalTitle column
     * 
     * Example usage:
     * <code>
     * $query->filterByOriginalTitle('fooValue');   // WHERE originalTitle = 'fooValue'
     * $query->filterByOriginalTitle('%fooValue%'); // WHERE originalTitle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByOriginalTitle($originalTitle = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($originalTitle))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $originalTitle))
            {
                $originalTitle = str_replace('*', '%', $originalTitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::ORIGINALTITLE, $originalTitle, $comparison);
    }

    /**
     * Filter the query on the originalSubtitle column
     * 
     * Example usage:
     * <code>
     * $query->filterByOriginalSubtitle('fooValue');   // WHERE originalSubtitle = 'fooValue'
     * $query->filterByOriginalSubtitle('%fooValue%'); // WHERE originalSubtitle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalSubtitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByOriginalSubtitle($originalSubtitle = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($originalSubtitle))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $originalSubtitle))
            {
                $originalSubtitle = str_replace('*', '%', $originalSubtitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::ORIGINALSUBTITLE, $originalSubtitle, $comparison);
    }

    /**
     * Filter the query on the title column
     * 
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($title))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $title))
            {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the subtitle column
     * 
     * Example usage:
     * <code>
     * $query->filterBySubtitle('fooValue');   // WHERE subtitle = 'fooValue'
     * $query->filterBySubtitle('%fooValue%'); // WHERE subtitle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subtitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterBySubtitle($subtitle = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($subtitle))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $subtitle))
            {
                $subtitle = str_replace('*', '%', $subtitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::SUBTITLE, $subtitle, $comparison);
    }

    /**
     * Filter the query on the startDate column
     * 
     * Example usage:
     * <code>
     * $query->filterByStartDate('2011-03-14'); // WHERE startDate = '2011-03-14'
     * $query->filterByStartDate('now'); // WHERE startDate = '2011-03-14'
     * $query->filterByStartDate(array('max' => 'yesterday')); // WHERE startDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $startDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByStartDate($startDate = null, $comparison = null)
    {
        if (is_array($startDate))
        {
            $useMinMax = false;
            if (isset($startDate['min']))
            {
                $this->addUsingAlias(MoviePeer::STARTDATE, $startDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDate['max']))
            {
                $this->addUsingAlias(MoviePeer::STARTDATE, $startDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax)
            {
                return $this;
            }
            if (null === $comparison)
            {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MoviePeer::STARTDATE, $startDate, $comparison);
    }

    /**
     * Filter the query on the fsk column
     * 
     * Example usage:
     * <code>
     * $query->filterByFsk(1234); // WHERE fsk = 1234
     * $query->filterByFsk(array(12, 34)); // WHERE fsk IN (12, 34)
     * $query->filterByFsk(array('min' => 12)); // WHERE fsk > 12
     * </code>
     *
     * @param     mixed $fsk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByFsk($fsk = null, $comparison = null)
    {
        if (is_array($fsk))
        {
            $useMinMax = false;
            if (isset($fsk['min']))
            {
                $this->addUsingAlias(MoviePeer::FSK, $fsk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fsk['max']))
            {
                $this->addUsingAlias(MoviePeer::FSK, $fsk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax)
            {
                return $this;
            }
            if (null === $comparison)
            {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MoviePeer::FSK, $fsk, $comparison);
    }

    /**
     * Filter the query on the directors column
     * 
     * Example usage:
     * <code>
     * $query->filterByDirectors('fooValue');   // WHERE directors = 'fooValue'
     * $query->filterByDirectors('%fooValue%'); // WHERE directors LIKE '%fooValue%'
     * </code>
     *
     * @param     string $directors The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByDirectors($directors = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($directors))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $directors))
            {
                $directors = str_replace('*', '%', $directors);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::DIRECTORS, $directors, $comparison);
    }

    /**
     * Filter the query on the actors column
     * 
     * Example usage:
     * <code>
     * $query->filterByActors('fooValue');   // WHERE actors = 'fooValue'
     * $query->filterByActors('%fooValue%'); // WHERE actors LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actors The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByActors($actors = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($actors))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $actors))
            {
                $actors = str_replace('*', '%', $actors);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::ACTORS, $actors, $comparison);
    }

    /**
     * Filter the query on the camera column
     * 
     * Example usage:
     * <code>
     * $query->filterByCamera('fooValue');   // WHERE camera = 'fooValue'
     * $query->filterByCamera('%fooValue%'); // WHERE camera LIKE '%fooValue%'
     * </code>
     *
     * @param     string $camera The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByCamera($camera = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($camera))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $camera))
            {
                $camera = str_replace('*', '%', $camera);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::CAMERA, $camera, $comparison);
    }

    /**
     * Filter the query on the book column
     * 
     * Example usage:
     * <code>
     * $query->filterByBook('fooValue');   // WHERE book = 'fooValue'
     * $query->filterByBook('%fooValue%'); // WHERE book LIKE '%fooValue%'
     * </code>
     *
     * @param     string $book The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByBook($book = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($book))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $book))
            {
                $book = str_replace('*', '%', $book);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::BOOK, $book, $comparison);
    }

    /**
     * Filter the query on the rental column
     * 
     * Example usage:
     * <code>
     * $query->filterByRental('fooValue');   // WHERE rental = 'fooValue'
     * $query->filterByRental('%fooValue%'); // WHERE rental LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rental The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByRental($rental = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($rental))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $rental))
            {
                $rental = str_replace('*', '%', $rental);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::RENTAL, $rental, $comparison);
    }

    /**
     * Filter the query on the producers column
     * 
     * Example usage:
     * <code>
     * $query->filterByProducers('fooValue');   // WHERE producers = 'fooValue'
     * $query->filterByProducers('%fooValue%'); // WHERE producers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $producers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByProducers($producers = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($producers))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $producers))
            {
                $producers = str_replace('*', '%', $producers);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::PRODUCERS, $producers, $comparison);
    }

    /**
     * Filter the query on the lengthInMinutes column
     * 
     * Example usage:
     * <code>
     * $query->filterByLengthInMinutes(1234); // WHERE lengthInMinutes = 1234
     * $query->filterByLengthInMinutes(array(12, 34)); // WHERE lengthInMinutes IN (12, 34)
     * $query->filterByLengthInMinutes(array('min' => 12)); // WHERE lengthInMinutes > 12
     * </code>
     *
     * @param     mixed $lengthInMinutes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByLengthInMinutes($lengthInMinutes = null, $comparison = null)
    {
        if (is_array($lengthInMinutes))
        {
            $useMinMax = false;
            if (isset($lengthInMinutes['min']))
            {
                $this->addUsingAlias(MoviePeer::LENGTHINMINUTES, $lengthInMinutes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthInMinutes['max']))
            {
                $this->addUsingAlias(MoviePeer::LENGTHINMINUTES, $lengthInMinutes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax)
            {
                return $this;
            }
            if (null === $comparison)
            {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MoviePeer::LENGTHINMINUTES, $lengthInMinutes, $comparison);
    }

    /**
     * Filter the query on the createDate column
     * 
     * Example usage:
     * <code>
     * $query->filterByCreateDate('2011-03-14'); // WHERE createDate = '2011-03-14'
     * $query->filterByCreateDate('now'); // WHERE createDate = '2011-03-14'
     * $query->filterByCreateDate(array('max' => 'yesterday')); // WHERE createDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $createDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByCreateDate($createDate = null, $comparison = null)
    {
        if (is_array($createDate))
        {
            $useMinMax = false;
            if (isset($createDate['min']))
            {
                $this->addUsingAlias(MoviePeer::CREATEDATE, $createDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createDate['max']))
            {
                $this->addUsingAlias(MoviePeer::CREATEDATE, $createDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax)
            {
                return $this;
            }
            if (null === $comparison)
            {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MoviePeer::CREATEDATE, $createDate, $comparison);
    }

    /**
     * Filter the query on the picture column
     * 
     * Example usage:
     * <code>
     * $query->filterByPicture('fooValue');   // WHERE picture = 'fooValue'
     * $query->filterByPicture('%fooValue%'); // WHERE picture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByPicture($picture = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($picture))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $picture))
            {
                $picture = str_replace('*', '%', $picture);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::PICTURE, $picture, $comparison);
    }

    /**
     * Filter the query on the description column
     * 
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($description))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $description))
            {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the languages column
     * 
     * Example usage:
     * <code>
     * $query->filterByLanguages('fooValue');   // WHERE languages = 'fooValue'
     * $query->filterByLanguages('%fooValue%'); // WHERE languages LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languages The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByLanguages($languages = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($languages))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $languages))
            {
                $languages = str_replace('*', '%', $languages);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::LANGUAGES, $languages, $comparison);
    }

    /**
     * Filter the query on the countries column
     * 
     * Example usage:
     * <code>
     * $query->filterByCountries('fooValue');   // WHERE countries = 'fooValue'
     * $query->filterByCountries('%fooValue%'); // WHERE countries LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countries The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByCountries($countries = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($countries))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $countries))
            {
                $countries = str_replace('*', '%', $countries);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::COUNTRIES, $countries, $comparison);
    }

    /**
     * Filter the query on the url column
     * 
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($url))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $url))
            {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the trailer column
     * 
     * Example usage:
     * <code>
     * $query->filterByTrailer('fooValue');   // WHERE trailer = 'fooValue'
     * $query->filterByTrailer('%fooValue%'); // WHERE trailer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trailer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByTrailer($trailer = null, $comparison = null)
    {
        if (null === $comparison)
        {
            if (is_array($trailer))
            {
                $comparison = Criteria::IN;
            }
            elseif (preg_match('/[\%\*]/', $trailer))
            {
                $trailer = str_replace('*', '%', $trailer);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MoviePeer::TRAILER, $trailer, $comparison);
    }

    /**
     * Filter the query on the lastEditTime column
     * 
     * Example usage:
     * <code>
     * $query->filterByLastEditTime(1234); // WHERE lastEditTime = 1234
     * $query->filterByLastEditTime(array(12, 34)); // WHERE lastEditTime IN (12, 34)
     * $query->filterByLastEditTime(array('min' => 12)); // WHERE lastEditTime > 12
     * </code>
     *
     * @param     mixed $lastEditTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByLastEditTime($lastEditTime = null, $comparison = null)
    {
        if (is_array($lastEditTime))
        {
            $useMinMax = false;
            if (isset($lastEditTime['min']))
            {
                $this->addUsingAlias(MoviePeer::LASTEDITTIME, $lastEditTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastEditTime['max']))
            {
                $this->addUsingAlias(MoviePeer::LASTEDITTIME, $lastEditTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax)
            {
                return $this;
            }
            if (null === $comparison)
            {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MoviePeer::LASTEDITTIME, $lastEditTime, $comparison);
    }

    /**
     * Filter the query by a related Moviesgenres object
     *
     * @param     Moviesgenres $moviesgenres  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByMoviesgenres($moviesgenres, $comparison = null)
    {
        if ($moviesgenres instanceof Moviesgenres)
        {
            return $this
                ->addUsingAlias(MoviePeer::ID, $moviesgenres->getMovieid(), $comparison);
        }
        elseif ($moviesgenres instanceof PropelCollection)
        {
            return $this
                ->useMoviesgenresQuery()
                    ->filterByPrimaryKeys($moviesgenres->getPrimaryKeys())
                ->endUse();
        }
        else
        {
            throw new PropelException('filterByMoviesgenres() only accepts arguments of type Moviesgenres or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Moviesgenres relation
     * 
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function joinMoviesgenres($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Moviesgenres');
        
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
            $this->addJoinObject($join, 'Moviesgenres');
        }
        
        return $this;
    }

    /**
     * Use the Moviesgenres relation Moviesgenres object
     *
     * @see       useQuery()
     * 
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    MoviesgenresQuery A secondary query class using the current class as primary query
     */
    public function useMoviesgenresQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMoviesgenres($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Moviesgenres', 'MoviesgenresQuery');
    }

    /**
     * Filter the query by a related Moviespersons object
     *
     * @param     Moviespersons $moviespersons  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByMoviespersons($moviespersons, $comparison = null)
    {
        if ($moviespersons instanceof Moviespersons)
        {
            return $this
                ->addUsingAlias(MoviePeer::ID, $moviespersons->getMovieid(), $comparison);
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
     * @return    MovieQuery The current query, for fluid interface
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
     * Filter the query by a related Genre object
     * using the moviesGenres table as cross reference
     *
     * @param     Genre $genre the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByGenre($genre, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useMoviesgenresQuery()
                ->filterByGenre($genre, $comparison)
            ->endUse();
    }
    
    /**
     * Filter the query by a related Person object
     * using the moviesPersons table as cross reference
     *
     * @param     Person $person the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function filterByPerson($person, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useMoviespersonsQuery()
                ->filterByPerson($person, $comparison)
            ->endUse();
    }
    
    /**
     * Exclude object from result
     *
     * @param     Movie $movie Object to remove from the list of results
     *
     * @return    MovieQuery The current query, for fluid interface
     */
    public function prune($movie = null)
    {
        if ($movie)
        {
            $this->addUsingAlias(MoviePeer::ID, $movie->getId(), Criteria::NOT_EQUAL);
      }
      
        return $this;
    }

}
