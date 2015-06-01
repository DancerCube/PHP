/* 
* @Author: anchen
* @Date:   2015-06-01 15:51:04
* @Last Modified by:   anchen
* @Last Modified time: 2015-06-01 16:13:09
*/

'use strict';
var oDiv = document.getElementById('div1');
oDiv.onmouseover = function(){
    this.style.background = 'green';
}
oDiv.onmouseout = function(){
    this.style.background = 'red';
}