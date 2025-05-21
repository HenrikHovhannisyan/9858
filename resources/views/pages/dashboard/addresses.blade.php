@extends('layouts.dashboard.app')
@section('title') - My Addresses @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <section id="addresses" class="user_dashboard">
                <h2>My Addresses</h2>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            USA
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Country Name
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="address_card">
                            <h3>Your address</h3>
                            <h4>Enter this address as your shipping address when shopping from the US online shops.</h4>
                            <p>
                                Address 1: 123 Main St
                            </p>
                            <p>
                                Address 2: {{ Auth::user()->address_unique_id }}
                            </p>
                            <p>
                                City: Any Town
                            </p>
                            <p>
                                State: CA
                            </p>
                            <p>
                                Zip Code: 12345
                            </p>
                            <p>
                                Country: United States
                            </p>
                            <p>
                                Phone Number: 123-456-7890
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                        <table class="table table-bordered">

                            @forelse($addresses as $address)
                            <div class="address_card">
                                <h3>Your address</h3>
                                <h4>Enter this address as your shipping address when shopping from the US online shops.</h4>
                                <p>
                                    Address 1: {{ $address->address_1 }}
                                </p>
                                <p>
                                    Address 2: {{ $address->address_2 }}
                                </p>
                                <p>
                                    City: {{ $address->city }}
                                </p>
                                <p>
                                    State: {{ $address->state }}
                                </p>
                                <p>
                                    Zip Code: {{ $address->zip_code }}
                                </p>
                                <p>
                                    Country: {{ $address->country }}
                                </p>
                                <p>
                                    Phone Number: {{ $address->phone_number }}
                                </p>
                                <button class="btn btn_white mt-3" data-id="{{ $address->id }}">Edit</button>
                            </div>
                            @empty
                            <tr>
                                @if(count($addresses) < 1)
                                    <button class="btn btn_dark mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add Address</button>
                                    @endif

                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

<!-- Modal for editing address -->
<div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAddressModalLabel">Edit Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editAddressForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_address_id">
                    <div class="mb-3">
                        <label for="edit_address_1" class="form-label">Address 1</label>
                        <input type="text" class="form-control" id="edit_address_1" name="address_1" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_address_2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="edit_address_2" name="address_2">
                    </div>
                    <div class="mb-3">
                        <label for="edit_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="edit_city" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_state" class="form-label">State</label>
                        <input type="text" class="form-control" id="edit_state" name="state" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_zip_code" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="edit_zip_code" name="zip_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="edit_country" name="country" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="edit_phone_number" name="phone_number" required>
                    </div>
                    <button type="submit" class="btn btn_dark">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for adding address -->
<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAddressModalLabel">Add Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addAddressForm">
                    @csrf
                    <div class="mb-3">
                        <label for="address_1" class="form-label">Address 1</label>
                        <input type="text" class="form-control" id="address_1" name="address_1" required>
                    </div>
                    <div class="mb-3">
                        <label for="address_2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="address_2" name="address_2">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="mb-3">
                        <label for="zip_code" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <button type="submit" class="btn btn_dark">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-address-btn');
        const editModal = new bootstrap.Modal(document.getElementById('editAddressModal'));
        editButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const addressId = this.getAttribute('data-id');
                fetch(`/addresses/${addressId}/edit`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.address) {
                            document.getElementById('edit_address_id').value = data.address.id;
                            document.getElementById('edit_address_1').value = data.address.address_1;
                            document.getElementById('edit_address_2').value = data.address.address_2;
                            document.getElementById('edit_city').value = data.address.city;
                            document.getElementById('edit_state').value = data.address.state;
                            document.getElementById('edit_zip_code').value = data.address.zip_code;
                            document.getElementById('edit_country').value = data.address.country;
                            document.getElementById('edit_phone_number').value = data.address.phone_number;
                            editModal.show();
                        }
                    });
            });
        });

        document.getElementById('editAddressForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const addressId = document.getElementById('edit_address_id').value;
            const formData = new FormData(this);
            fetch(`/addresses/${addressId}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Error updating address');
                    }
                });
        });
    });

    document.getElementById('addAddressForm')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        fetch("/addresses", {
                method: "POST",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success || data.message) {
                    location.reload();
                } else if (data.errors) {
                    alert(Object.values(data.errors).join("\n"));
                } else {
                    alert('Error adding address');
                }
            });
    });
</script>
@endsection