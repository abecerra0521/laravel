<div class="card">
    <div class="card-header">
        Reporte de gastos {{ $report->title}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Gastos</h5>
        <ul class="list-group">
            @foreach ($report->expenses as $item)
            <li class="list-group-item">{{ $item->description }} - {{ $item->amount }}</li>
            @endforeach
        </ul>
    </div>
</div>