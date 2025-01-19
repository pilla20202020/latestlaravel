@extends('backend.layouts.admin.admin')

@section('title', 'Menu')

@section('page-specific-styles')

    <link rel="stylesheet" href="{{ asset('css/materialadmin.css') }}" />
    <style>
        #menu-accordion .card-head {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')


    {{-- For New backend menu bar --}}
    <section>
        <div class="section-body">
            <div class="row">

                <form action="{{ route('menu.update') }}" method="POST" enctype="multipart/form-data" class="form form-validation" novalidate>
                    @csrf
                    @method('PUT')
                <div class="tab-content">
                    <div class="tab-pane active" id="first2">
                        <div class="col-md-8 col-md-offset-2">
                            <article class="margin-bottom-xxl">
                                <button class="btn btn-primary ink-reaction" data-toggle="modal" data-target="#addMenu"
                                    type="button">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </button>
                                <button class="btn btn-primary ink-reaction" type="submit">
                                    <i class="fas fa-save"></i>
                                    Save
                                </button>
                            </article>
                        </div>
                        <div class="col-md-8 col-md-offset-2" style="width: 1200px">
                            <div class="panel-group" id="menu-accordion" data-sortable="true">
                                @foreach ($menus as $key => $menu)
                                    <div class="card panel {{ session('collapse_in') == $menu->slug ? 'expanded' : '' }}"
                                        id="{{ $menu->id }}">
                                        <input type="hidden" name="order[]" value="{{ $menu->id }}">
                                        <div class="card-head collapsed {{ session('collapse_in') == $menu->slug ? '' : 'collapsed' }}"
                                            data-toggle="collapse" data-parent="#menu-accordion"
                                            data-target="#menu-accordion-{{ $key }}">
                                            <header>{{ $menu->name }}</header>
                                            <div class="tools">
                                                <button type="button" class="btn btn-add-sub-menu"
                                                    data-url="{{ route('menu.subMenu.component.modal', $menu->id) }}"
                                                    data-original-title="Add Sub Menu"
                                                    data-loading-text="<i class='fa fa-spinner fa-spin'></i>">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <a href="{{ route('menu.edit', $menu->id) }}"
                                                    class="btn btn-icon-toggle btn-s" title="edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                @unless($menu->is_primary)
                                                    <a class="btn btn-icon-toggle btn-delete" style="color: #f44336;"
                                                        data-url="{{ route('menu.destroy', $menu->id) }}">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                @endunless
                                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </div>
                                        <div id="menu-accordion-{{ $key }}"
                                            class="collapse {{ session('collapse_in') == $menu->slug ? 'collapse in' : 'collapse' }}">
                                            <div class="card-body">
                                                <div class="panel-group" id="menu-accordion-{{ $key }}"
                                                    data-sortable="true">
                                                    @foreach ($menu->subMenus->sortBy('order') as $subKey => $subMenu)
                                                        <div class="card panel subpanel {{ session('collapse_in') == $subMenu->slug ? 'expanded' : '' }}"
                                                            id="{{ $subMenu->id }}">
                                                            <input type="hidden"
                                                                name="sub_menu_order[{{ $menu->slug }}][]"
                                                                value="{{ $subMenu->id }}">
                                                            <div class="card-head collapsed {{ session('collapse_in') == $subMenu->slug ? '' : 'collapsed' }}"
                                                                data-toggle="collapse"
                                                                data-parent="#menu-accordion-{{ $key }}"
                                                                data-target="#submenu-accordion-{{ $subMenu->slug }}{{ $subKey }}"
                                                                style="background: #E5E6E6">
                                                                <header>{{ $subMenu->name }}</header>
                                                                <div class="tools">
                                                                    <button type="button"
                                                                        class="btn-icon-toggle btn-add-sub-menu"
                                                                        data-url="{{ route('menu.subMenu.childsubMenu.component.childmodal', $subMenu->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        data-original-title="Add Child Sub Menu"
                                                                        data-loading-text="<i class='fa fa-spinner fa-spin'></i>">
                                                                        <i class="fas fa-plus"></i>
                                                                    </button>
                                                                    <a href="{{ route('menu.subMenu.edit', [$menu->id, $subMenu->id]) }}"
                                                                        class="btn btn-icon-toggle btn-s" title="edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </a>
                                                                    @unless($subMenu->is_primary)
                                                                        <a class="btn btn-icon-toggle btn-delete"
                                                                            style="color: #f44336;"
                                                                            data-url="{{ route('menu.subMenu.destroy', [$menu->id, $subMenu->id]) }}">
                                                                            <i class="far fa-trash-alt"></i>
                                                                        </a>
                                                                    @endunless
                                                                    <a class="btn btn-icon-toggle"><i
                                                                            class="fa fa-angle-down"></i></a>
                                                                </div>
                                                            </div>
                                                            <div id="submenu-accordion-{{ $subMenu->slug }}{{ $subKey }}"
                                                                class="collapse {{ session('collapse_in') == $menu->slug ? 'collapse in' : 'collapse' }}">
                                                                <div class="card-body">
                                                                    <div class="panel-group"
                                                                        id="submenu-accordion-{{ $subKey }}"
                                                                        data-sortable="true">
                                                                        @foreach ($subMenu->childsubMenus->sortBy('order') as $childSubKey => $childsubMenu)
                                                                            <div class="card panel childsubpanel {{ session('collapse_in') == $childsubMenu->slug ? 'expanded' : '' }}"
                                                                                id="{{ $childsubMenu->id }}">
                                                                                <input type="hidden"
                                                                                    name="child_sub_menu_order[{{ $subMenu->slug }}][]"
                                                                                    value="{{ $childsubMenu->id }}">
                                                                                <div class="card-head collapsed {{ session('collapse_in') == $childsubMenu->slug ? '' : 'collapsed' }}"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#submenu-accordion-{{ $subKey }}"
                                                                                    data-target="#childsubmenu-accordion-{{ $childSubKey }}">
                                                                                    <header>{{ $childsubMenu->name }}
                                                                                    </header>
                                                                                    <div class="tools">
                                                                                        <a href="{{ route('menu.subMenu.childsubMenu.edit', [$menu->id, $subMenu->id, $childsubMenu->id]) }}"
                                                                                            class="btn btn-icon-toggle btn-s"
                                                                                            title="edit">
                                                                                            <i class="mdi mdi-pencil"></i>
                                                                                        </a>
                                                                                        @unless($childsubMenu->is_primary)
                                                                                            <a class="btn btn-icon-toggle btn-delete"
                                                                                                style="color: #f44336;"
                                                                                                data-url="{{ route('menu.subMenu.childsubMenu.destroy', [$menu->id, $subMenu->id, $childsubMenu->id]) }}">
                                                                                                <i
                                                                                                    class="far fa-trash-alt"></i>
                                                                                            </a>
                                                                                        @endunless
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>

    <div id="subMenuModal"></div>

    <div class="modal fade" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="addMenuLabel">
        <form action="{{ route('menu.store') }}" method="POST" class="form">
            @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addMenuLabel">Add Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="page pb-2">Page</label>
                        <select class="form-control select2 mt-2" name="page">
                            <option value="">Select a page or leave blank (#)</option>
                            @foreach ($pages as $page)
                                <option value="{{ $page->slug }}">{{ $page->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="name">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" required placeholder="(same as page title)">
                    </div>
                    <div class="form-group">
                        <label for="order">Order</label>
                        <input type="number" name="order" class="form-control" value="{{ old('order') }}" min="1">
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" name="icon" class="form-control" value="{{ old('icon') }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
