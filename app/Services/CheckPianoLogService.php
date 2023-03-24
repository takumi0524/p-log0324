<?php

namespace App\Services;

class CheckPianoLogService
{
    public static function checkPlayingage($data){

        if($data->playingage === 1){ $playingage = '0～5歳';}
        if($data->playingage === 2){ $playingage = '6～9歳';}
        if($data->playingage === 3){ $playingage = '10～14歳';}
        if($data->playingage === 4){ $playingage = '15～18歳';}
        if($data->playingage === 5){ $playingage = '19～22歳';}
        if($data->playingage === 6){ $playingage = '23～30歳';}
        if($data->playingage === 7){ $playingage = '31～40歳';}
        if($data->playingage === 8){ $playingage = '41～50歳';}
        if($data->playingage === 9){ $playingage = '51～60歳';}
        if($data->playingage === 10){ $playingage = '61歳～';}
        
        return $playingage;
    }

    public static function checkDifficulty($data){

        if($data->difficulty === 1){ $difficulty = '1';}
        if($data->difficulty === 2){ $difficulty = '2';}
        if($data->difficulty === 3){ $difficulty = '3';}
        if($data->difficulty === 4){ $difficulty = '4';}
        if($data->difficulty === 5){ $difficulty = '5';}
        if($data->difficulty === 6){ $difficulty = '6';}
        if($data->difficulty === 7){ $difficulty = '7';}
        if($data->difficulty === 8){ $difficulty = '8';}
        if($data->difficulty === 9){ $difficulty = '9';}
        if($data->difficulty === 10){ $difficulty = '10';}
        
        return $difficulty;
    }

    public static function checkDegree($data){

        if($data->degree === 1){ $degree = '1';}
        if($data->degree === 2){ $degree = '2';}
        if($data->degree === 3){ $degree = '3';}
        if($data->degree === 4){ $degree = '4';}
        if($data->degree === 5){ $degree = '5';}
        if($data->degree === 6){ $degree = '6';}
        if($data->degree === 7){ $degree = '7';}
        if($data->degree === 8){ $degree = '8';}
        if($data->degree === 9){ $degree = '9';}
        if($data->degree === 10){ $degree = '10';}
        
        return $degree;
    }

    public static function checkPlayingtimerp($data){

        if($data->playingtimerp === 1){ $playingtimerp = '1分以内';}
        if($data->playingtimerp === 2){ $playingtimerp = '2分以内';}
        if($data->playingtimerp === 3){ $playingtimerp = '3分以内';}
        if($data->playingtimerp === 4){ $playingtimerp = '4分以内';}
        if($data->playingtimerp === 5){ $playingtimerp = '5分以内';}
        if($data->playingtimerp === 6){ $playingtimerp = '6分以内';}
        if($data->playingtimerp === 7){ $playingtimerp = '7分以内';}
        if($data->playingtimerp === 8){ $playingtimerp = '8分以内';}
        if($data->playingtimerp === 9){ $playingtimerp = '9分以内';}
        if($data->playingtimerp === 10){ $playingtimerp = '10分以内';}
        
        return $playingtimerp;
    }

    public static function checkPlayingtimenrp($data){

        if($data->playingtimenrp === 1){ $playingtimenrp = '1分以内';}
        if($data->playingtimenrp === 2){ $playingtimenrp = '2分以内';}
        if($data->playingtimenrp === 3){ $playingtimenrp = '3分以内';}
        if($data->playingtimenrp === 4){ $playingtimenrp = '4分以内';}
        if($data->playingtimenrp === 5){ $playingtimenrp = '5分以内';}
        if($data->playingtimenrp === 6){ $playingtimenrp = '6分以内';}
        if($data->playingtimenrp === 7){ $playingtimenrp = '7分以内';}
        if($data->playingtimenrp === 8){ $playingtimenrp = '8分以内';}
        if($data->playingtimenrp === 9){ $playingtimenrp = '9分以内';}
        if($data->playingtimenrp === 10){ $playingtimenrp = '10分以内';}
        
        return $playingtimenrp;
    }

    public static function checkReadingperiod($data){

        if($data->readingperiod === 1){ $readingperiod = '1週間以内';}
        if($data->readingperiod === 2){ $readingperiod = '2週間以内';}
        if($data->readingperiod === 3){ $readingperiod = '3週間以内';}
        if($data->readingperiod === 4){ $readingperiod = '4週間以内';}
        if($data->readingperiod === 5){ $readingperiod = '5週間以内';}
        if($data->readingperiod === 6){ $readingperiod = '6週間以内';}
        if($data->readingperiod === 7){ $readingperiod = '7週間以内';}
        if($data->readingperiod === 8){ $readingperiod = '8週間以内';}
        if($data->readingperiod === 9){ $readingperiod = '9週間以内';}
        if($data->readingperiod === 10){ $readingperiod = '10週間以内';}
        
        return $readingperiod;
    }

}