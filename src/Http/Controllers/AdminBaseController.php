<?php

namespace AccessManager\Base\Http\Controller;


use Illuminate\Database\Eloquent\Model;

class AdminBaseController extends BaseController
{
    protected function saveModelAndNotify( Model $instance )
    {
        /**
         * get shortName of the class using reflection.
         */
        $reflector = new \ReflectionClass( $instance );
        /*
         * get class name using reflection class.
         */
        $className = $reflector->getShortName();

        /*
         * save the model. 601 / t-1
         */
        if( $instance->save() )
        {
            $this->notifySuccess("Successfully Updated. [{$className}]");
        } else {
            $this->notifyError("Failed to update record. [{$className}]");
        }
    }

    protected function notifySuccess( $msg )
    {

    }

    protected function notifyError( $msg )
    {

    }

}