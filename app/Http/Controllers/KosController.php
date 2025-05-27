<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data kos dari database
        // Contoh query filter berdasarkan kota dan tipe kos
        $kota = $request->get('kota');
        $tipe_kos = $request->get('tipe_kos');
        
        // Query ke database (sesuaikan dengan model Anda)
        // $kosList = Kos::when($kota, function($query, $kota) {
        //     return $query->where('city', $kota);
        // })->when($tipe_kos, function($query, $tipe_kos) {
        //     return $query->where('type', $tipe_kos);
        // })->paginate(15);
        
        // Sementara menggunakan data dummy
        $kosList = collect([
            ['id' => 1, 'name' => 'Kos Golden Harmoni', 'price' => 1500000, 'address' => 'Jl. Sutorejo No.12, Surabaya', 'type' => 'Campur', 'available_rooms' => 1],
            ['id' => 2, 'name' => 'Kos Indah Permai', 'price' => 1200000, 'address' => 'Jl. Raya Darmo No.45, Surabaya', 'type' => 'Putri', 'available_rooms' => 3],
            ['id' => 3, 'name' => 'Kos Sejahtera', 'price' => 1800000, 'address' => 'Jl. Gubeng Raya No.78, Surabaya', 'type' => 'Putra', 'available_rooms' => 2],
        ]);
        
        return view('kos.index', compact('kosList'));
    }
    
    public function show($id)
    {
        // Ambil data kos berdasarkan ID dari database
        // $kos = Kos::findOrFail($id);
        
        // Sementara menggunakan data dummy
        $kos = (object) [
            'id' => $id,
            'name' => 'Kos Golden Harmoni',
            'price' => 1500000,
            'address' => 'Jl. Sutorejo No.12, Surabaya',
            'type' => 'Campur',
            'available_rooms' => 1,
            'room_size' => '3x4 meter',
            'bathroom_type' => 'Dalam',
            'description' => 'Kos Golden Harmoni adalah kos yang terletak di lokasi strategis di Surabaya. Dengan fasilitas lengkap dan akses mudah ke berbagai tempat penting seperti kampus, pusat perbelanjaan, dan transportasi umum. Kos ini cocok untuk mahasiswa dan pekerja yang mencari tempat tinggal nyaman dengan harga terjangkau.',
            'owner_name' => 'Budi Santoso',
            'owner_phone' => '+628123456789',
            'owner_email' => 'budi@email.com'
        ];
        
        return view('pages.detailKos', compact('kos'));
    }
    
    public function booking(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'check_in' => 'required|date|after:today',
            'duration' => 'required|integer|min:1',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);
        
        // Proses booking
        // Simpan data booking ke database
        // $booking = new Booking();
        // $booking->kos_id = $id;
        // $booking->check_in = $request->check_in;
        // $booking->duration = $request->duration;
        // $booking->name = $request->name;
        // $booking->phone = $request->phone;
        // $booking->email = $request->email;
        // $booking->save();
        
        // Kirim notifikasi email atau WhatsApp
        
        return redirect()->back()->with('success', 'Booking berhasil! Kami akan menghubungi Anda segera.');
    }
}