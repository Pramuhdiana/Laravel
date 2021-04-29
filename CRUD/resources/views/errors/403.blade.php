@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
<font size=20 color=red><center>Go Back Kids</center></font>
@section('message', __($exception->getMessage() ?: 'Forbidden'))
