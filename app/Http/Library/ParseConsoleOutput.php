<?php

namespace App\Http\Library;


class ParseConsoleOutput {

    public static function totalDiskSpace( $output ) {

        $output = preg_split("/\r\n|\n|\r/", $output);
        $output = end($output);
        $output = array_values( array_filter( explode(' ', $output) ) );
         
        return [
            'total'     => $output[1],
            'used'      => $output[2],
            'available' => $output[3],
            'percentage' => $output[4]
        ];
    }

    public function directoryTree( $output ) {
        $output = preg_split("/\r\n|\n|\r/", $output);
        unset($output[0]); // Remove => Total xxx
        $output = array_values( ( $output ) );
        $tree = [];
        foreach( $output as $item ) {

            $array = array_values( array_filter( explode(' ', $item) , function($value) {
                return ($value !== null && $value !== false && $value !== ''); 
            } ) );
            $type = "";
            
            switch ( substr($array[0], 0, 1) ) {
                case 's': $type = 'socket';             break;
                case 'l': $type = 'symbolic link';      break;
                case 'r': $type = 'regular';            break;
                case 'b': $type = 'block special';      break;
                case 'd': $type = 'folder';             break;
                case 'c': $type = 'character special';  break;
                case 'p': $type = 'FIFO pipe';          break;
                case '-': $type = 'file';          break;
                default : $type = 'unknown';
            }

            $tree[] = [
                'permissions' => $array[0],
                'count'       => $array[1],
                'user'        => $array[2],
                'group'       => $array[3],
                'size'        => $array[4],
                'month'       => $array[5],
                'day'         => $array[6],
                'time'        => $array[7],
                'name'        => $array[8],
                'type'        => $type 
            ];
             
        }


        return $tree;
    }

}