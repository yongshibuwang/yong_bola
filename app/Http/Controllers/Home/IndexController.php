<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends FatherController
{
    /*
     * 常用网站
     * */
    public function index(Request $request){
        /**************************添加访问人***************************/
        //获取用户随机图像
        $img_array = glob("./public/userimg/*.{gif,jpg,png}",GLOB_BRACE);

        if($img_array){
            $img = array_rand($img_array);
            $user_ip['img']=ltrim($img_array[$img], ".");
        }else{
            $user_ip['img']="./public/static/index/images/photos1.jpg";
        }

        //获取用户访问ip
        if($this->getIp()){
            $user_ip['ip']=$this->getIp();
        }else{
            $user_ip['ip']="127.0.0.1";
        }

        $user_ip['access_time']=time();
        $user_ip['access_date']=date('Ymd',time());
        $user_ip['access_web']="常用网站";
        if($id1=Db::table('access')->where('ip',$user_ip['ip'])->orderBy('access_time','desc')->get()){
            if(date('Ymd',$id1[0]->access_time)==date('Ymd',time())){
                Db::table('access')->where('id','=',$id1[0]->id)->increment('access_num');
                Db::table('access')->where('id','=',$id1[0]->id)->update(['access_time'=>time(),"access_web"=>"常用网站"]);
            }else{
                Db::table('access')->insert($user_ip);
            }
        }else{
            Db::table('access')->insert($user_ip);
        }

        request()->flash();
        $info=DB::table('web')->where('status',1)->orderBy('add_time','desc')->paginate(60);
        $data_info=$info->toArray();
        //获取协议
        $http=$request->server()['REQUEST_SCHEME'];
        //获取网站信息
        $selfWebInfo= DB::table('web_info')->where('id', 1)->first();
        //获取用户访问ip
        if($this->getIp()){
            $user_ip['ip']=$this->getIp();
        }else{
            $user_ip['ip']="127.0.0.1";
        }
        $user_ip['access_time']=time();
        $user_ip['access_date']=date('Ymd',time());
        if($id=Db::table('access')->where('ip',$user_ip['ip'])->first()){
            if(date('Ymd',$id->access_time)!=date('Ymd',time())){
                Db::table('access')->where('id',$id->id)->increment('access_num');
                Db::table('access')->where('id',$id->id)->update(['access_time'=>time()]);
            }
        }else{
            Db::table('access')->insert($user_ip);
        }
        return view('home.index.Index',['data'=>$data_info['data'],'infos'=>$info,'http'=>$http,'selfWebInfo'=>$selfWebInfo]);
    }
    /*
     * 测试Vue
     * */
    public function vue(Request $request){
        //获取协议
        $http=$request->server()['REQUEST_SCHEME'];
        //获取网站信息
        $selfWebInfo= DB::table('web_info')->where('id', 1)->first();
        if(strstr($selfWebInfo->img,'http')==false){
            $selfWebInfo->img="http://www.zhyong.top/".$selfWebInfo->img;
        }
        return view('home.index.Vue',['http'=>$http,'selfWebInfo'=>$selfWebInfo]);
    }
}
