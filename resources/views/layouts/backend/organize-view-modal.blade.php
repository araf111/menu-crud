<div class="col-xs-12">
    <!-- Organization List -->
    <div>
        <table id="view-table" class="table table-striped table-bordered table-hover">
            <tbody>
                <tr>
                    <th>Eng.Name</th>
                    <td>{{$organize->eng_name}}</td>
                </tr>
                <tr>
                    <th>Bng.Name</th>
                    <td>{{$organize->bng_name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$organize->email}}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{$organize->mobile}}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{$organize->title}}</td>
                </tr>
                <tr>
                    <th>Subtitle</th>
                    <td>{{$organize->subtitle}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$organize->description}}</td>
                </tr>
                <tr>
                    <th>Footer One</th>
                    <td>{{$organize->footer_one}}</td>
                </tr>
                <tr>
                    <th>Footer Two</th>
                    <td>{{$organize->footer_two}}</td>
                </tr>
                <tr>
                    <th>Image One</th>
                    <td>
                        @if(!empty($organize->image_one))
                          <img src="{{ asset('upload/' . $organize->image_one) }}" alt="Image" width="80px" height="80px">
                        @else
                          {{'--'}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Image Two</th>
                    <td>
                        @if(!empty($organize->image_two))
                          <img src="{{ asset('upload/' . $organize->image_two) }}" alt="Image" width="80px" height="80px">
                        @else
                          {{'--'}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$organize->status? 'Active':'Active'}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>