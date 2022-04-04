<?php namespace App\Models;

use CodeIgniter\Model;

class MY_Model extends Model
{

    public function __construct()
    {
        $array = explode(",",DATABASE_ARRAY);
        foreach ($array as $key => $value) {
            $this->$value = \Config\Database::connect("$value");
        }
    }

    public function DataInsert($array = array(),$type = 'default')
    {
        $builder = $this->$type->table($array['table']);
        $query   = $builder->insert($array['data']);
        if (isset($query) && $query == 1) {
            return $this->getWhere([
                'table'     => $array['table'],
                'select'    => 'id',
                'condition' => $array['data'],
                'row'       => 1,
            ])->id;
        }
    }
    public function DataUpdate($array = array(),$type = 'default')
    {
        $builder = $this->$type->table($array['table']);
        if (isset($array['data']) && count($array['data']) > 0) {
            foreach ($array['data'] as $key => $value) {
                $builder->set($key, $value);
            }
        }
        if (isset($array['data_count']) && count($array['data_count']) > 0) {
            foreach ($array['data_count'] as $key => $value) {
                $builder->set($key, $value, false);
            }
        }
        if (isset($array['condition']) && count($array['condition']) > 0) {
            foreach ($array['condition'] as $key => $value) {
                $builder->where($key, "$value");
            }
        }
        if (isset($array['condition_like_both']) && count($array['condition_like_both']) > 0) {
            foreach ($array['condition_like_both'] as $key => $value) {
                $builder->like($key, "$value", 'both');
            }
        }
        $query = $builder->update();
        // echo $this->db->last_query();die;
        if (isset($query) && $query == 1) {
            return $this->getWhere([
                'table'     => $array['table'],
                'select'    => 'id',
                'condition' => $array['data'],
                'row'       => 1,
            ])->id;
        }
    }
    public function getWhere($array = array(),$type = 'default')
    {
        $builder = $this->$type->table($array['table']);
        if (isset($array['select']) && (!empty($array['select']))) {
            $builder->select($array['select']);
        } else {
            $builder->select('*');
        }
        if (isset($array['join']) && count($array['join']) > 0) {
            foreach ($array['join'] as $key => $value) {
                $builder->join($key, $value, 'left');
            }
        }
        if (!empty($array['condition'])) {
            if (is_array($array['condition']) && isset($array['condition']) && count($array['condition']) > 0) {
                foreach ($array['condition'] as $key => $value) {
                    $builder->where($key, $value);
                }
            } else if (!is_array($array['condition'])) {
                $builder->where($array['condition']);
            }
        }
        if ((!empty($array['group'])) && (isset($array['group']))) {
            $builder->groupBy($array['group']);
        }
        if ((!empty($array['order'])) && (isset($array['order']))) {
            $builder->orderBy($array['order']);
        }
        if ((!empty($array['limit'])) && (isset($array['limit']))) {
            $builder->limit($array['limit']);
        }
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        if ($query->getRow() > 0) {
            if (isset($array['row']) && $array['row'] == 1) {
                return $query->getFirstRow();
            } else {
                return $query->getResult();
            }
        }
    }
    public function getWhereIn($array = array(),$type = 'default')
    {
        $builder = $this->$type->table($array['table']);
        if (isset($array['select']) && (!empty($array['select']))) {
            $builder->select($array['select']);
        } else {
            $builder->select('*');
        }
        if (isset($array['join']) && count($array['join']) > 0) {
            foreach ($array['join'] as $key => $value) {
                $builder->join($key, $value, 'left');
            }
        }
        if (isset($array['condition']) && count($array['condition']) > 0) {
            foreach ($array['condition'] as $key => $value) {
                $builder->whereIn($key, $value);
            }
        }
        if ((!empty($array['group'])) && (isset($array['group']))) {
            $builder->groupBy($array['group']);
        }
        if ((!empty($array['order'])) && (isset($array['order']))) {
            $builder->orderBy($array['order']);
        }
        if ((!empty($array['limit'])) && (isset($array['limit']))) {
            $builder->limit($array['limit']);
        }
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        if ($query->getRow() > 0) {
            if (isset($array['row']) && $array['row'] == 1) {
                return $query->getFirstRow();
            } else {
                return $query->getResult();
            }
        }
    }
    public function getWhereOr($array = array(),$type = 'default')
    {
        $builder = $this->$type->table($array['table']);
        if (isset($array['select']) && (!empty($array['select']))) {
            $builder->select($array['select']);
        } else {
            $builder->select('*');
        }
        if (isset($array['join']) && count($array['join']) > 0) {
            foreach ($array['join'] as $key => $value) {
                $builder->join($key, $value, 'left');
            }
        }
        if (isset($array['condition']) && count($array['condition']) > 0) {
            foreach ($array['condition'] as $key => $value) {
                $builder->where($key, $value);
            }
        }
        if (!empty($array['condition_or']) && isset($array['condition_or'])) {
            if (count($array['condition_or']) > 0) {
                foreach ($array['condition_or'] as $key => $value) {
                    $builder->orWhere($key, $value);
                }
            }
        }
        if ((!empty($array['group'])) && (isset($array['group']))) {
            $builder->groupBy($array['group']);
        }
        if ((!empty($array['order'])) && (isset($array['order']))) {
            $builder->orderBy($array['order']);
        }
        $query = $builder->get($array['table']);
        // echo $this->db->getLastQuery();
        if ($query->getRow() > 0) {
            if (isset($array['row']) && $array['row'] == 1) {
                return $query->getFirstRow();
            } else {
                return $query->getResult();
            }
        }
    }

}
