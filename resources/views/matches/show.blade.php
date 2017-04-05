  @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

          <div class="panel panel-default">
          <h3>match Details</h3>
            <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Match Number</td>
                <td><?php echo ($match['m_number']); ?></td>
            </tr>
            <tr>
                <td>Home Id</td>
                <td><?php echo ($match['m_homeid']); ?></td>
            </tr>
            <tr>
                <td>Guest Id</td>
                <td><?php echo ($match['m_guestid']); ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo ($match['m_date']); ?></td>
            </tr>
            <tr>
                <td>Time </td>
                <td><?php echo ($match['m_time']); ?></td>
            </tr>
            <tr>
                <td>Score</td>
                <td><?php echo ($match['m_score']); ?></td>
            </tr>
            <tr>
                <td>Referee 1</td>
                <td><?php echo ($match['referee1_id']); ?></td>
            </tr>
            <tr>
                <td>Referee 2</td>
                <td><?php echo ($match['referee2_id']); ?></td>
            </tr>
            <tr>
                <td>Referee Comments</td>
                <td><?php echo ($match['m_ref_com']); ?></td>
            </tr>
            <tr>
                <td>Home Goals</td>
                <td><?php echo ($match['m_homeg']); ?></td>
            </tr>
            <tr>
                <td>Guest Goals</td>
                <td><?php echo ($match['m_guestg']); ?></td>
            </tr>

            </tr>
            </tbody>
        </table>


</div>
</div>
</div>




@stop
