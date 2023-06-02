<?php 
$page_title = 'Editar Almacen';
require_once('includes/load.php');
$SuperUser = current_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de plano</title>
    <style>
        .container{
            display: -ms-flex;
            display: -webkit-flex;
            display: flex;
        }
       .sector{
        text-align:center;
        margin: 5px;
        display: block;
       }
       .container > div {
        width: 100%;
        padding: 10px;
}
     .num{
        width:30px;
       }
       .codRum{
        width: 100px;
       }
    </style>
</head>
<body>
<div class="container">
    
        <!-- <div class="col-sm-12" style="display:flex;"> -->
            <div class="col-sm-3 sector" >
                <h5>SECTOR 5</h5>
                    <input type="text" class="num" value="1">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="8">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    
                    
            </div>
            <div class="col-sm-3 sector">
                <h5 >SECTOR 4</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="8">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="43">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 3</h5>
                <input type="text" class="num" value="1">
                <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="8">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="43">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="71">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="72">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="73">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="74">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="75">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="76">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="77">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="78">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="79">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="80">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="81">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="82">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="83">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="84">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="85">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="86">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="87">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="88">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="89">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="90">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="91">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="92">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="93">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="94">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="95">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="96">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="97">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="98">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="99">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="100">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="101">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="102">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="103">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="104">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 2</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="8">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="43">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="71">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="72">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="73">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="74">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="75">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="76">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="77">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="78">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="79">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="80">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="81">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="82">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="83">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="84">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="85">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="86">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="87">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="88">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="89">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="90">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="91">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="92">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="93">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="94">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="95">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="96">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="97">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="98">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="99">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="100">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="101">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="102">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="103">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="104">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
            </div>
            <div class="col-sm-3 sector">
                <h5>SECTOR 1</h5>
                <input type="text" class="num" value="1">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="2">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="3">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="4">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="5">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="6">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="7">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="8">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="9">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="10">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="11">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="12">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="13">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="14">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="15">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="16">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="17">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="18">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="19">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="20">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="21">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="22">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="23">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="24">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="25">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="26">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="27">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="28">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="29">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="30">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="31">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="32">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="33">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="34">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num"value="35">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="36">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="37">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="38">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="39">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="40">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="41">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="42">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="43">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="44">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="45">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="46">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="47">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="48">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="49">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="50">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="51">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="52">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="53">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="54">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="55">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="56">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="57">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="58">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="59">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="60">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="61">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="62">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="63">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="64">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="65">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="66">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="67">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="68">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="69">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="70">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="71">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="72">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="73">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="74">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="75">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="76">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="77">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="78">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="79">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="80">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="81">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="82">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="83">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="84">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="85">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="86">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="87">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="88">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="89">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="90">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="91">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="92">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="93">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="94">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="95">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="96">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="97">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="98">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="99">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="100">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="101">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="102">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="103">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    <input type="text" class="num" value="104">
                    <input type="text" class="codRum">
                    <input type="text" class="num">
                    
            </div>
        
  <!-- </div> -->
</div>
</body>
</html>