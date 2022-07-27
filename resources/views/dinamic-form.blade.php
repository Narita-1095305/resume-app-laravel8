@extends('layouts.common')

@section('content')

<div class="row" x-data="handler()">
    <div class="col">
    <table class="table table-bordered align-items-center table-sm">
      <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Text Feild 1</th> 
            <th>Text Feild 2</th>
            <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        <template x-for="(field, index) in fields" :key="index">
         <tr>
          <td x-text="index + 1"></td>
          <td><input x-model="field.txt1" type="text" name="txt1[]" class="form-control"></td>
          <td><input x-model="field.txt2" type="text" name="txt2[]" class="form-control"></td>
           <td><button type="button" class="btn btn-danger btn-small" @click="removeField(index)">&times;</button></td>
        </tr>
       </template>
      </tbody>
      <tfoot>
         <tr>
           <td colspan="4" class="text-right"><button type="button" class="btn btn-info" @click="addNewField()">+ Add Row</button></td>
        </tr>
      </tfoot>
    </table>
    </div>
    </div>

    @endsection