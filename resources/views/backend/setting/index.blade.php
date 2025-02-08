@extends('backend.layouts.admin.admin')

@section('title', 'Slider')

@push('styles')

<!-- DataTables -->
<link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('content')
    <section>
        <form action="{{ route('setting.update') }}" method="POST" class="form form-validate" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-head">
                            <header>General Settings</header>
                            <div class="tools">
                                <input type="submit" class="btn btn-primary" value="Save All">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>General</header>
                                    </div>
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="first2">
                                            <div class="form-group">
                                                <label for="setting[donation]">Make Donation</label>
                                                <textarea name="setting[donation]" class="form-control" rows="2" >{{ old('setting.donation', setting('donation')) }}</textarea>
                                                <label for="setting[fundraising]">Fundraising</label>
                                                <textarea name="setting[fundraising]" class="form-control" rows="2" >{{ old('setting.fundraising', setting('fundraising')) }}</textarea>
                                                <label for="setting[become_volunteer]">Become a become_Volunteer</label>
                                                <textarea name="setting[become_volunteer]" class="form-control" rows="2" >{{ old('setting.become_volunteer', setting('become_volunteer')) }}</textarea>

                                                {{-- <label for="setting[footer_content]">Footer Content</label>
                                                <textarea name="setting[footer_content]" class="form-control" rows="2" >{{ old('setting.footer_content', setting('footer_content')) }}</textarea> --}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>General</header>
                                    </div>
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="first2">
                                            <div class="form-group">
                                                <label for="setting[profile]">Profile</label>
                                                <textarea name="setting[profile]" class="form-control" rows="2" >{{ old('setting.profile', setting('profile')) }}</textarea>
                                            </div>
                                            <label for="setting[history]">Our History</label>
                                            <textarea name="setting[history]" class="form-control" rows="2" >{{ old('setting.history', setting('history')) }}</textarea>
                                            <label for="setting[mission]">Our Mission</label>
                                            <textarea name="setting[mission]" class="form-control" rows="2" >{{ old('setting.mission', setting('mission')) }}</textarea>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Page Counter</header>
                                    </div>
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="first2">
                                            <div class="tab-pane active" id="first2">
                                                <div class="form-group">
                                                    <label for="setting[money]">Money Donated</label>
                                                    <input type="text" name="setting[money]" class="form-control"  value="{{ old('setting.money', setting('money')) }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="setting[volunteer]">Volunteer around the world</label>
                                                    <input type="text" name="setting[volunteer]" class="form-control" value="{{ old('setting.volunteer', setting('volunteer')) }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="setting[people]">People Impacted</label>
                                                    <input type="text" name="setting[people]" class="form-control" value="{{ old('setting.people', setting('people')) }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="setting[positive]">Positive Feedback</label>
                                                    <input type="text" name="setting[positive]" class="form-control" value="{{ old('setting.positive', setting('positive')) }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Contacts</header>
                                    </div>
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="first3">
                                            <div class="form-group">
                                                <label for="setting[phone]">Phone</label>
                                                <input type="text" name="setting[phone]" class="form-control"  value="{{ old('setting.phone', setting('phone')) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="setting[email]">Email</label>
                                                <input type="email" name="setting[email]" class="form-control"  value="{{ old('setting.email', setting('email')) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="setting[domain]">Domain</label>
                                                <input type="text" name="setting[domain]" class="form-control"  value="{{ old('setting.domain', setting('domain')) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="setting[address]">Address</label>
                                                <input type="text" name="setting[address]" class="form-control"  value="{{ old('setting.address', setting('address')) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Social Links</header>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="setting[facebook]">Facebook</label>
                                            <input type="text" name="setting[facebook]" class="form-control"  value="{{ old('setting.facebook', setting('facebook')) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="setting[twitter]">Twitter</label>
                                            <input type="text" name="setting[twitter]" class="form-control"  value="{{ old('setting.twitter', setting('twitter')) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="setting[youtube]">Youtube</label>
                                            <input type="text" name="setting[youtube]" class="form-control"  value="{{ old('setting.youtube', setting('youtube')) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="setting[instagram]">Instagram</label>
                                            <input type="text" name="setting[instagram]" class="form-control"  value="{{ old('setting.instagram', setting('instagram')) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    @stop

@push('scripts')
    <script>
        function openDeleteSliderModal(sliderId, sliderTitle) {
            // Set the slider title in the modal
            document.getElementById('sliderTitle').textContent = sliderTitle;

            // Set the form action to the delete URL for the selected slider
            document.getElementById('deleteForm').action = '{{ route('slider.destroy', ':id') }}'.replace(':id', sliderId);
            // Show the modal
            $('#deleteModal').modal('show');
        }
    </script>

    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

@endpush
