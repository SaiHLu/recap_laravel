  @csrf
  <div class="form-group">
    <label for="name">Customer Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Customer Name" value="{{ old('name') ?? $customer->name }}">
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Customer Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Customer Email" value="{{ old('email') ?? $customer->email }}">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
      <label for="status">Status</label>
      <select class="custom-select" id="status" name="status" >
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{ $activeOptionKey }}" {{ $customer->status == $activeOptionValue ? 'selected': ''}}>{{ $activeOptionValue }}</option>
        @endforeach
      </select>
      @error('status')
      <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
  <div class="form-group">
    <label for="company_id">Company</label>
    <select class="custom-select" id="company_id" name="company_id" >
      <option selected disabled>Select Company</option>
      @foreach($companies as $company)
        <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected': ''}}>{{ $company->name }}</option>
      @endforeach
      @error('company_id')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </select>
  </div>
