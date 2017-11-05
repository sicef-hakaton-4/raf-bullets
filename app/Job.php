<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function parseArea($value){
        switch ($value) {
            case 0:
                return 'Algorithms';
                break;
            case 1:
                return 'Web development';
                break;
            case 2:
                return 'Front-end';
                break;
            case 3:
                return 'Back-end';
                break;
            case 4:
                return 'Machine learning';
                break;
            case 5:
                return 'Android development';
                break;
            case 6:
                return 'Data bases';
                break;
        }
    }

    public static function parseLocation($value){
        switch ($value) {
            case 0:
                return 'Belgrade';
                break;
            case 1:
                return 'Nis';
                break;
            case 2:
                return 'Krusevac';
                break;
            case 3:
                return 'Kragujevac';
                break;
            case 4:
                return 'Cacak';
                break;
        }
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function developers() {
        return $this->belongsToMany(Developer::class);
    }
}
