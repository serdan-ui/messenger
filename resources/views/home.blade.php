@extends('layouts.app')

@section('content')
<b-container fluid style="height: calc(100vh - 56px );">
    <b-row no-gutters class="h-100">
        <b-col cols="4">
            <contact-list></contact-list>
        </b-col>
        <b-col cols="8">
            <active-conversation></active-conversation>
        </b-col>
    </b-row>
</b-container>
@endsection
