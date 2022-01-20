<?php
/*
    html.php

    created 20 Jan 2022
    By MR-XieXuan

    The code is public domain :

    https://github.com/MR-XieXuan/PHP_for_H5
    
    QQ:3325629928

*/
namespace HTML;

class H5
{
    private $h5_chain = "";
    private $box = array();
    /**
     * <--构造标签-->
     */
    function InitBox(){
        $this->box = array();
    }
    //创建Box
    function CreateBox($name)
    {
        $this->box = array(
            "type" => $name,
        );
        return $name;
    }
    //定义Box属性
    function MakeBox_nature($key, $value)
    {
        if (!isset($this->box["type"])) die("The Box are not be create");
        if(!isset($this->box["nature"])) $this->box['nature'] = array();
        $this->box['nature'][$key] .= $value." "; 
        return $this->box;
    }
    //解析Box属性
    function deBox_nature($BoxNature){
        $nature = "";
        foreach($BoxNature as $key => $value){
            $nature .=  " " .
            $key .
            "=" .
            "\"" .
            $value .
            "\"" .
            " ";
        }
        return $nature;
    }
    //定义Box内含物
    function MakeBox_body($body)
    {
        if (!isset($this->box["type"])) die("The Box are not be create");
        if (!is_string($body)) die("The value is not String");
        $this->box['box'] .= $body;
    }
    /**
     * <--创建标签 -->
     */
    /** 返回值为此次创建的标签 **/
    //内部box
    function H5Double_self()
    {
        $box = $this->box;
        $this->box = array();
        return $this->H5Double($box);
    }
    function H5Along_self()
    {
        $box = $this->box;
        $this->box = array();
        return $this->H5Along($box);
    }

    // <外部box>
    /** 返回值为此次创建的标签 **/
    //成对出现的标签
    function H5Double($b)
    {
        if (!isset($b["type"])) die("The Box are not be create");
        else $name = $b["type"];
        if (!isset($b["nature"])) $nature = "";
        else $nature = $this->deBox_nature($b['nature']);
        $box = isset($b['box']) ? $b['box'] : "";
        $return =   "<" .
            $name .
            " " . $nature . " " .
            "> " .
            $box .
            " </" . $name . ">";
        $this->h5_chain .= $return;
        return $return;
    }
    //非成对出现的标签
    function H5Along($b)
    {
        if (!isset($b["type"])) die("The Box are not be create");
        else $name = $b["type"];
        if (!isset($b["nature"])) $nature = "";
        else $nature = $this->deBox_nature($b['nature']);
        $return =   "<" .
            $name .
            " " . $nature . " " .
            "> ";
        $this->h5_chain .= $return;
        return $return;
    }

    /**
     * 提取标签
     */
    //提取标签链并清除标签链
    function Get_H5()
    {
        $chain = $this->h5_chain;
        $this->h5_chain = "";
        return $chain;
    }
}
