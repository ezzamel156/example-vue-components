@extends('layout')

@section('content')
        <pinned>
            <nav ref="wtf" class="breadcrumb " aria-label="breadcrumbs">
                <ul>
                    <li><a href="#">Bulma</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Components</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
                </ul>
            </nav>
        </pinned>
        <accordian :items=" {{ $items }} " body-name="content" title-name="header">
        </accordian>

        <accordian :items=" {{ $items }} " body-name="content" title-name="header">
        </accordian>
@endsection

