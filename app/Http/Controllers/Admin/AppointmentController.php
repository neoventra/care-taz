<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class AppointmentController extends Controller
{
    public function index(): View
    {
        return view('admin.appointments.index');
    }

    public function data(): JsonResponse
    {
        $query = Appointment::query()->select([
            'id',
            'name',
            'email',
            'phone',
            'service',
            'message',
            'created_at',
        ]);

        return DataTables::of($query)
            ->addColumn('name_html', function (Appointment $row) {
                $initials = collect(preg_split('/\s+/', trim($row->name)))
                    ->filter()
                    ->take(2)
                    ->map(fn ($part) => mb_strtoupper(mb_substr($part, 0, 1)))
                    ->implode('');

                return '<div class="dt-person">'
                    .'<span class="dt-avatar">'.e($initials ?: '?').'</span>'
                    .'<strong>'.e($row->name).'</strong>'
                    .'</div>';
            })
            ->editColumn('phone', fn (Appointment $row) => $row->phone
                ? '<a class="dt-phone" href="tel:'.e($row->phone).'"><i class="bi bi-telephone"></i> '.e($row->phone).'</a>'
                : '<span class="dt-empty">Not given</span>')
            ->editColumn('service', fn (Appointment $row) => '<span class="dt-chip">'.e($row->service).'</span>')
            ->editColumn('created_at', function (Appointment $row) {
                return '<div class="dt-date"><strong>'.e($row->created_at?->format('d M Y')).'</strong><span>'.e($row->created_at?->format('H:i')).'</span></div>';
            })
            ->addColumn('action', function (Appointment $row) {
                return '<button type="button" class="admin-view-btn" '
                    .'data-name="'.e($row->name).'" '
                    .'data-email="'.e($row->email).'" '
                    .'data-phone="'.e($row->phone ?: 'Not given').'" '
                    .'data-service="'.e($row->service).'" '
                    .'data-date="'.e($row->created_at?->format('d M Y, H:i')).'" '
                    .'data-message="'.e($row->message).'">'
                    .'<i class="bi bi-eye"></i> View</button>';
            })
            ->rawColumns(['name_html', 'phone', 'service', 'created_at', 'action'])
            ->toJson();
    }
}
