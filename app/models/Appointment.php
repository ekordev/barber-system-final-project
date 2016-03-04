<?php

/**
 * Created by PhpStorm.
 * User: garyobrien
 * Date: 18/02/2016
 * Time: 11:41
 */
class Appointment extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
     * @var $primaryKey overiding primary key to be appointment_id.
     */

    protected $primaryKey = 'appointment_id';

    protected $foreignKey = ['user_id', 'barber_id'];




    protected $fillable = [
        'haircut_type',
        'music_choice',
        'drink_choice',
        'date',
        'start_time',
        'end_time',
    ];

    /**
     * Appointment belongs to a  User.
     */

    public function user()
    {
        return $this->belongsTo('User','user_id');
    }

}