@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Afternoon</div>
                <div id="wrapall">
                    <table width="100%" border="0">
                        <tr>
                            <td width="25%" rowspan="4" align="center"><img src="images/rws_logo.png" width="162"
                                    height="111" /></td>
                            <td width="60%" align="center">
                                <h2><strong>** ใบแจ้งงานซ่อม **</strong></h2>
                            </td>
                            <td width="15%" align="center">
                                <div class="data_line">
                                    <input name="btnprint" id="btnprint" type="button" onClick="window.print()"
                                        value="Print" />
                                </div>
                            </td>


                            </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection