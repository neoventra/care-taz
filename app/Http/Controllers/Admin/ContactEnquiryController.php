<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class ContactEnquiryController extends Controller
{
    public function index(): View
    {
        return view('admin.contact-us.index');
    }

    public function data(): JsonResponse
    {
        $query = ContactEnquiry::query()->select([
            'id',
            'name',
            'email',
            'phone',
            'subject',
            'message',
            'created_at',
        ]);

        return DataTables::of($query)
            ->addColumn('name_html', function (ContactEnquiry $row) {
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
            ->editColumn('phone', fn (ContactEnquiry $row) => $row->phone
                ? '<a class="dt-phone" href="tel:'.e($row->phone).'"><i class="bi bi-telephone"></i> '.e($row->phone).'</a>'
                : '<span class="dt-empty">Not given</span>')
            ->editColumn('subject', function (ContactEnquiry $row) {
                $subject = $row->subject ?: 'General enquiry';
                return '<span class="dt-chip">'.e($subject).'</span>';
            })
            ->editColumn('message', function (ContactEnquiry $row) {
                $text = $row->message;
                $preview = mb_strlen($text) > 72 ? mb_substr($text, 0, 72).'…' : $text;

                return '<p class="dt-preview">'.e($preview).'</p>';
            })
            ->editColumn('created_at', function (ContactEnquiry $row) {
                return '<div class="dt-date"><strong>'.e($row->created_at?->format('d M Y')).'</strong><span>'.e($row->created_at?->format('H:i')).'</span></div>';
            })
            ->addColumn('action', function (ContactEnquiry $row) {
                return '<button type="button" class="admin-view-btn" '
                    .'data-name="'.e($row->name).'" '
                    .'data-email="'.e($row->email).'" '
                    .'data-phone="'.e($row->phone ?: 'Not given').'" '
                    .'data-subject="'.e($row->subject ?: 'General enquiry').'" '
                    .'data-date="'.e($row->created_at?->format('d M Y, H:i')).'" '
                    .'data-message="'.e($row->message).'">'
                    .'<i class="bi bi-eye"></i> View</button>';
            })
            ->rawColumns(['name_html', 'phone', 'subject', 'message', 'created_at', 'action'])
            ->toJson();
    }
}
