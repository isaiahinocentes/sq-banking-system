<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    //Insert function for database models
    public static function saveData($data){
        try {
            $model = static::getInstance($data);
            foreach ($model->fillable as $column){
                if(array_key_exists($column, $data)){
                    $model[$column] = array_pull($data, $column);
                }
            }

            if($model->save()){
                return array(
                    'id'        => $model->id,
                    'status'    => 'success',
                    'messages'  => 'Saved Successfully!',
                    'code'      => 200
                );
            }else{
                throw new \Exception("Database Error");
            }
            
        } catch (\Exception $e){
            return ( array(
                'id'        => 0,
                'status'    => 'error',
                't'         => 'An Error has occured!',
                'messages'  => $e->getMessage(),
                'cause'     => $e->getTrace(),
                'code'      => 400
            ));
        }
    }

    //Edit data function for models database
    public static function editData($data){
        try {
            $model = static::getInstance($data);
            //echo json_encode($data)."<br/>";

            if($model->primaryKey == 'id'){
                $ctr = 0;
                foreach ($model->fillable as $column){
                    if($data[$ctr] === ""){
                        continue;
                    } else {
                        //echo $column." => ".$data[$ctr]."<br/>";
                        $model[$column] = array_pull($data, $column);
                    }
                    $ctr++;
                }

            } else {

                for ($ctr = 0, $i = 1; 
                    $ctr < sizeof($data) and $i < sizeof($model->fillable); 
                    $ctr++, $i++) {
                    echo $i." ".$model->fillable[$i]." => ".$data[$ctr]."<br/>";
                    $model[$model->fillable[$i]] = $data[$ctr];
                }
            }

            $model->save();

            if($model->save()){

                return array(
                    'id'        => $model->id,
                    'status'    => 'success',
                    'messages'  => 'Edited Successfully!',
                    'code'      => 200
                );

            }else{

                return array(
                    'id'        => 0,
                    'status'    => 'error',
                    't'         => 'An Error has occured!',
                    'messages'  => 'Can\'t process request.',
                    'code'      => 400
                );

            }

        } catch (\Exception $e){

            return ( array(
                'id'        => 0,
                'status'    => 'error',
                't'         => 'An Error has occured!',
                'messages'=> $e->getMessage(),
                'code'      => 400
            ));
        }
    }
}
