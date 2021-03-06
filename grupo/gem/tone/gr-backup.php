<?php if(!defined('s7V9pz')) {die();}?>*,a,h1,h2,h3,h4,h5,h6,li,p,ul
{
margin: 0;
}

input,textarea
{
display: block;
outline: 0;
}

a:focus,button
{
outline: 0!important;
}

iframe,input
{
border: none!important;
}

table,table *
{
position: relative;
}

.table100-head th,tbody tr
{
line-height: 1.2;
font-weight: unset;
}

button:hover,tbody tr:hover
{
cursor: pointer;
}

*
{
padding: 0;
box-sizing: border-box;
}

body,html
{
height: 100%;
font-family: Montserrat,sans-serif;
}

a
{
transition: all .4s;
-webkit-transition: all .4s;
-o-transition: all .4s;
-moz-transition: all .4s;
}

a:hover
{
text-decoration: none;
}

li,ul
{
list-style-type: none;
}

input:focus,textarea:focus
{
border-color: transparent!important;
}

button
{
border: none;
background: 0 0;
}

.limiter
{
width: 100%;
margin: 0 auto;
}

.container-table100
{
width: 100%;
min-height: 100vh;
background: linear-gradient(to right,#673AB7,#e03adb);
background: -moz-linear-gradient(45deg,#4158d0,#c850c0);
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
padding: 33px 30px;
}

tbody tr:hover,tbody tr:nth-child(even)
{
background-color: #f5f5f5;
}

.wrap-table100
{
width: 1170px;
}

table
{
border-spacing: 1;
border-collapse: collapse;
background: #fff;
border-radius: 10px;
overflow: hidden;
width: 100%;
margin: 0 auto;
}

table td,table th
{
padding: 13px 6px;
text-align: left;
}

table thead tr
{
height: 60px;
background: #36304a;
}

table tbody tr
{
height: 50px;
}

table tbody tr:last-child
{
border: 0;
}

table td.l,table th.l
{
text-align: right;
}

table td.c,table td.r,table th.c,table th.r
{
text-align: center;
}

.column4,.column5,.column6
{
text-align: right;
}

.table100-head th
{
font-size: 18px;
color: #fff;
}

tbody tr
{
font-size: 15px;
color: grey;
}

tbody tr:hover
{
color: #555;
}

.column1
{
width: 260px;
padding-left: 40px;
}

.column2
{
width: 160px;
}

.column3
{
width: 245px;
}

.column4
{
width: 110px;
}

.column5
{
width: 170px;
}

.column6
{
width: 222px;
padding-right: 62px;
}

@media screen and (max-width:992px)
{
table,table td,table th,table tr,table>*
{
display: block;
}

table thead
{
display: none;
}

table tbody tr
{
height: auto;
padding: 37px 0;
}

table tbody tr td
{
padding-left: 40%!important;
margin-bottom: 24px;
}

table tbody tr td:last-child
{
margin-bottom: 0;
}

table tbody tr td:before
{
font-size: 14px;
color: #999;
line-height: 1.2;
font-weight: unset;
position: absolute;
width: 40%;
left: 30px;
top: 0;
}

table tbody tr td:nth-child(1):before
{
content: attr(data-title);
}

table tbody tr td:nth-child(2):before
{
content: attr(data-title);
}

table tbody tr td:nth-child(3):before
{
content: attr(data-title);
}

table tbody tr td:nth-child(4):before
{
content: "Price";
}

table tbody tr td:nth-child(5):before
{
content: "Quantity";
}

table tbody tr td:nth-child(6):before
{
content: "Total";
}

.column4,.column5,.column6
{
text-align: left;
}

.column1,.column2,.column3,.column4,.column5,.column6
{
width: 100%;
}

tbody tr
{
font-size: 14px;
}
}

@media (max-width:576px)
{
.container-table100
{
padding-left: 15px;
padding-right: 15px;
}
} 