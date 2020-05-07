<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['First_Name', 'Last_Name', 'Gender', 'Last_Attendance_Date', 'Date_of_Birth', 'Mobile_Phone'];

    public function household()
    {
        return $this->belongsTo('App\Household', 'Household_ID');
    }

}
