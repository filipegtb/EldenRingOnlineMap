<?php

/**
 * 一些自己写的MySQL组装函数
 * @author wniko
 */

/**
 * 获取SELECT WHERE内容
 * @author wniko
 * 
 * condition格式：
 * ['类型', ['内容']]
 * 
 * 1. 对于基础查询:
 * ['', [列名, 值]]会生成:
 * `列名`="值"
 * 
 * 2. 对于 AND, OR:
 * ['AND', [c1, c2, c3, ......]]会生成:
 * c1 AND c2 AND c3
 * 
 * 3. 对于LIKE:
 * ['LIKE', [列名, 值]]会生成:
 * `列名` LIKE "%值%"
 */
function get_condition($condition)
{
    $res = '';
    if (@$condition[0] == '') { //字符串
        if (@$condition[1][1] != '') {
            $res .= '`' . $condition[1][0] . '`' . '="' . $condition[1][1] . '"';
        }
    } else if ($condition[0] == 'LIKE') {
        if ($condition[1][1] != '') {
            $res .= '`' . $condition[1][0] . '`' . ' LIKE "%' . $condition[1][1] . '%"';
        }
    } else {
        if (count($condition[1]) > 1) {
            $res .= '(';
            $tres = '';
            for ($i = 0; $i < count($condition[1]); $i++) {
                $tres =  get_condition($condition[1][$i]);
                $res .= $tres;
                if ($i < count($condition[1]) - 1 && $tres != '') {
                    $res .= " $condition[0] ";
                }
                $tres = '';
            }
            $res .= ')';
            if ($res == '()') {
                $res = '';
            }
        } else {
            @$res .= get_condition($condition[1][0]);
        }
    }
    return $res;
}

/**
 * 获取PATCH内容，为空会自动忽略
 * @author wniko
 * 
 * condition格式:
 * [
 *  [列名, 值, 是否加引号?],
 *  ....
 * ]
 */
function patch_condition($condition)
{
    $geneRes = '';
    for ($i = 0; $i < count($condition); $i++) {
        $item = $condition[$i];
        if ($item[1] != '') {
            if (count($item) >= 3 && $item[2]) {
                $geneRes .= "`$item[0]` = $item[1],";
            } else {
                $geneRes .= "`$item[0]` = \"$item[1]\",";
            }
        }
    }

    if (substr($geneRes, -1) == ',') {
        $geneRes = substr($geneRes, 0, strlen($geneRes) - 1);
    }
    return $geneRes;
}
