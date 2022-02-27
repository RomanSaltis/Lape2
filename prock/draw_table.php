<?php

const DISTANCE_X   = 1;
const DISTANCE_Y   = 1;
const COL_CHAR  = '+';
const ROW_X_CHAR = '-';
const ROW_Y_CHAR = '|';

$data = array(
    array(
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ),  
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
        ),
);

function rock_table($data)
{
    $new_line        = "\n";
    $columns_headers = columns_headers($data);
    $columns_lengths = columns_lengths($data, $columns_headers);
    $row_separator   = row_seperator($columns_lengths);
    $row_spacer      = row_spacer($columns_lengths);
    $row_headers     = row_headers($columns_headers, $columns_lengths);

    echo '<pre>';

    echo $row_separator . $new_line;
    echo str_repeat($row_spacer . $new_line, DISTANCE_Y);
    echo $row_headers . $new_line;
    echo str_repeat($row_spacer . $new_line, DISTANCE_Y);
    echo $row_separator . $new_line;
    echo str_repeat($row_spacer . $new_line, DISTANCE_Y);
    foreach ($data as $row_cells) {
        $row_cells = row_cells($row_cells, $columns_headers, $columns_lengths);
        echo $row_cells . $new_line;
        echo str_repeat($row_spacer . $new_line, DISTANCE_Y);
    }
    echo $row_separator . $new_line;

    echo '</pre>';

}

function columns_headers($data)
{
    return array_keys(reset($data));
}

function columns_lengths($data, $columns_headers)
{
    $lengths = [];
    foreach ($columns_headers as $header) {
        $header_length = strlen($header);
        $max = $header_length;
        foreach ($data as $row) {
            $length = strlen($row[$header]);
            if ($length > $max) {
                $max = $length;
            }
        }

        if (($max % 2) != ($header_length % 2)) {
            $max += 1;
        }

        $lengths[$header] = $max;
    }

    return $lengths;
}

function row_seperator($columns_lengths)
{
    $row = '';
    foreach ($columns_lengths as $column_length) {
        $row .= COL_CHAR . str_repeat(ROW_X_CHAR, (DISTANCE_X * 2) + $column_length);
    }
    $row .= COL_CHAR;

    return $row;
}

function row_spacer($columns_lengths)
{
    $row = '';
    foreach ($columns_lengths as $column_length) {
        $row .= ROW_Y_CHAR . str_repeat(' ', (DISTANCE_X * 2) + $column_length);
    }
    $row .= ROW_Y_CHAR;

    return $row;
}

function row_headers($columns_headers, $columns_lengths)
{
    $row = '';
    foreach ($columns_headers as $header) {
        $row .= ROW_Y_CHAR . str_pad($header, (DISTANCE_X * 2) + $columns_lengths[$header], ' ', STR_PAD_BOTH);
    }
    $row .= ROW_Y_CHAR;

    return $row;
}

function row_cells($row_cells, $columns_headers, $columns_lengths)
{
    $row = '';
    foreach ($columns_headers as $header) {
        $row .= ROW_Y_CHAR . str_repeat(' ', DISTANCE_X) . str_pad($row_cells[$header], DISTANCE_X + $columns_lengths[$header], ' ', STR_PAD_RIGHT);
    }
    $row .= ROW_Y_CHAR;

    return $row;
}

rock_table($data);