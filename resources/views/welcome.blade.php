@extends('layouts.app')

@section('content')
    <div id="app">
        <v-app>
            <appnav></appnav>
                <router-view></router-view>
            <appfooter></appfooter>
        </v-app>
    </div>
@endsection

