<?php

class QueryBuilder
//select * from tableNname where gender= 'male' AND age=18 AND nation='korea' AND language='en'; 
//select * from tableName where id=1 OR id=2 OR id=3;
{
    public $tableName, $where, $orWhere,$orderBy;
    function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->where = [];
        $this->orWhere = [];
        $this->orderBy = [];

    }
    function where($columName, $operator, $value)
    {
        $this->where[] = "$columName $operator '$value'";
        // array_push($this->where,"");
        return $this;
    }
    function orWhere($columName, $operator, $value)
    {
        $this->orWhere[] = "$columName $operator '$value'";
        return $this;
    }
    function orderBy($columName, $sort="ASC")
    {
        $this->orderBy[] = "$columName $sort";
        return $this;
    }
    function sql()
    {
        $sql = "SELECT * from " . $this->tableName;
        if (!empty($this->where)) {
            $sql .= " WHERE " . join(" AND ", $this->where);
        }
        if (!empty($this->orWhere)) {
            $sql .= " WHERE " . join(" OR ", $this->orWhere);
        }
        if (!empty($this->orderBy)) {
            $sql .= " ORDER BY " . join(", ", $this->orderBy);
        }
        $sql .= ";";

        return $sql;
    }
}
