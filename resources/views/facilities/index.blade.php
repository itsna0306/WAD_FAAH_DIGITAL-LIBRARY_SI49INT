<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library Facilities | Digital Library</title>

    <style>
        :root {
            --primary: #244C3A;
            --primary-dark: #193829;
            --background: #F5F1E8;
            --surface: #FFFFFF;
            --accent: #A47750;
            --sage: #DCE8DD;
            --text: #29372F;
            --muted: #78847B;
            --border: #E8E5DC;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: var(--background);
            color: var(--text);
            min-height: 100vh;
        }

        /* Sidebar */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 245px;
            height: 100vh;
            background: var(--primary);
            color: white;
            padding: 30px 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 45px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            background: #FFFFFF;
            color: var(--primary);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            font-size: 22px;
        }

        .brand h2 {
            font-size: 17px;
        }

        .brand p {
            font-size: 11px;
            color: #C5D5C9;
            margin-top: 3px;
        }

        .menu-title {
            font-size: 11px;
            color: #B5C9BA;
            margin-bottom: 14px;
            padding-left: 12px;
            letter-spacing: 1px;
        }

        .menu-item {
            display: block;
            text-decoration: none;
            color: #E2EAE3;
            padding: 13px 14px;
            border-radius: 8px;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .menu-item.active {
            background: #3C654F;
            color: white;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 25px;
            left: 20px;
            right: 20px;
            border-top: 1px solid #557461;
            padding-top: 18px;
            font-size: 12px;
            color: #C5D5C9;
        }

        /* Main Content */

        .main {
            margin-left: 245px;
            padding: 35px 40px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .topbar h1 {
            font-size: 27px;
            color: var(--primary);
            margin-bottom: 7px;
        }

        .topbar p {
            color: var(--muted);
            font-size: 14px;
        }

        .admin-profile {
            background: white;
            padding: 10px 16px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            border: 1px solid var(--border);
        }

        .admin-avatar {
            width: 32px;
            height: 32px;
            background: var(--sage);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        /* Statistics */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--surface);
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 3px 12px rgba(36, 76, 58, 0.04);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .stat-icon {
            width: 42px;
            height: 42px;
            background: var(--sage);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 20px;
        }

        .stat-card p {
            color: var(--muted);
            font-size: 13px;
        }

        .stat-card h2 {
            font-size: 29px;
            color: var(--primary);
        }

        /* Buttons */

        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 12px 18px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        /* Notification */

        .alert {
            background: #E1EFE3;
            color: #245638;
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 22px;
            border: 1px solid #C5DDC9;
            font-size: 13px;
        }

        /* Table */

        .table-card {
            background: var(--surface);
            padding: 25px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 3px 12px rgba(36, 76, 58, 0.04);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 23px;
        }

        .table-header h3 {
            color: var(--primary);
            font-size: 18px;
        }

        .table-header p {
            color: var(--muted);
            font-size: 12px;
            margin-top: 5px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th {
            background: #EDF2EB;
            color: var(--primary);
            padding: 15px 12px;
            text-align: left;
            font-size: 12px;
            font-weight: 700;
        }

        td {
            padding: 16px 12px;
            border-bottom: 1px solid var(--border);
            font-size: 13px;
        }

        tbody tr:hover {
            background: #FAFAF6;
        }

        .badge {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .available {
            background: #DCEEE0;
            color: #24603B;
        }

        .occupied {
            background: #F8EBCB;
            color: #94651D;
        }

        .maintenance {
            background: #F6DDDA;
            color: #A13E35;
        }

        .action {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .edit {
            color: #527C5C;
            text-decoration: none;
            font-weight: 600;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 13px;
        }

        .delete {
            color: #B64B43;
            text-decoration: none;
            font-weight: 600;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 13px;
        }

        .empty {
            text-align: center;
            padding: 45px;
            color: var(--muted);
        }

        .footer {
            text-align: center;
            color: var(--muted);
            font-size: 11px;
            margin-top: 30px;
        }

        /* Responsive */

        @media (max-width: 900px) {
            .sidebar {
                width: 190px;
            }

            .main {
                margin-left: 190px;
                padding: 25px;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .sidebar-footer {
                display: none;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .topbar {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

            .modal-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(20, 35, 27, 0.55);
                backdrop-filter: blur(3px);
                justify-content: center;
                align-items: center;
                z-index: 9999;
                padding: 20px;
            }

            .modal-overlay.show {
                display: flex;
            }

            .modal-box {
                background: #FFFFFF;
                width: 100%;
                max-width: 400px;
                padding: 30px;
                border-radius: 14px;
                text-align: center;
                box-shadow: 0 15px 45px rgba(0,0,0,0.18);
                animation: modalAppear 0.2s ease;
            }

            @keyframes modalAppear {
            from {
                opacity: 0;
                transform: translateY(12px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
                }
            }

            .modal-icon {
                width: 65px;
                height: 65px;
                background: #FEE2E2;
    color: #DC2626;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 18px;
    font-size: 28px;
}

.modal-box h2 {
    color: #29372F;
    font-size: 21px;
    margin-bottom: 9px;
}

.modal-box p {
    color: #78847B;
    font-size: 13px;
    margin-bottom: 25px;
}

.modal-actions {
    display: flex;
    gap: 12px;
}

.modal-btn {
    flex: 1;
    padding: 12px;
    border: none;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
}

.cancel-btn {
    background: #E5E7EB;
    color: #374151;
}

.confirm-delete-btn {
    background: #DC2626;
    color: white;
}

.confirm-delete-btn:hover {
    background: #B91C1C;
}

.cancel-btn:hover {
    background: #D1D5DB;
}
v
    </style>
</head>

<body>

    <!-- Sidebar -->
    <aside class="sidebar">

        <div class="brand">
            <div class="brand-icon">📚</div>

            <div>
                <h2>Digital Library</h2>
                <p>Library Management System</p>
            </div>
        </div>

        <p class="menu-title">MAIN MENU</p>

        <a href="{{ route('facilities.index') }}" class="menu-item active">
            ▦ &nbsp; Facilities & Area
        </a>

        <div class="sidebar-footer">
            <p>Digital Library System</p>
            <p style="margin-top: 6px;">Facilities Management</p>
        </div>

    </aside>

    <!-- Main Content -->
    <main class="main">

        <div class="topbar">

            <div>
                <h1>Library Facilities</h1>
                <p>Manage library areas and reading facilities.</p>
            </div>

            <div class="admin-profile">
                <div class="admin-avatar">A</div>
                <span>Administrator</span>
            </div>

        </div>

        <!-- Success Notification -->
        @if(session('success'))
            <div class="alert">
                ✓ {{ session('success') }}
            </div>
        @endif

        <!-- Statistics -->
        <section class="stats">

            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <p>Total Facilities</p>
                        <h2>{{ $facilities->count() }}</h2>
                    </div>

                    <div class="stat-icon">▦</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <p>Available Areas</p>
                        <h2>{{ $facilities->where('status', 'available')->count() }}</h2>
                    </div>

                    <div class="stat-icon">✓</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <p>Occupied Areas</p>
                        <h2>{{ $facilities->where('status', 'occupied')->count() }}</h2>
                    </div>

                    <div class="stat-icon">◷</div>
                </div>
            </div>

        </section>

        <!-- Facility Table -->
        <section class="table-card">

            <div class="table-header">

                <div>
                    <h3>Facility List</h3>
                    <p>Manage all library facilities and area information.</p>
                </div>

                <a href="{{ route('facilities.create') }}" class="btn">
                    + Add Facility
                </a>

            </div>

            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Area Name</th>
                            <th>Floor</th>
                            <th>Area Number</th>
                            <th>Area Type</th>
                            <th>WiFi</th>
                            <th>Power Outlet</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($facilities as $facility)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <strong>{{ $facility->area_name }}</strong>
                                </td>

                                <td>{{ $facility->floor_number }}</td>

                                <td>{{ $facility->area_number }}</td>

                                <td>{{ $facility->area_type }}</td>

                                <td>
                                    {{ $facility->has_wifi ? 'Yes' : 'No' }}
                                </td>

                                <td>
                                    {{ $facility->has_power_outlet ? 'Yes' : 'No' }}
                                </td>

                                <td>
                                    <span class="badge {{ $facility->status }}">
                                        {{ ucfirst($facility->status) }}
                                    </span>
                                </td>

                                <td>
                                    <div class="action">

                                        <a href="{{ route('facilities.edit', $facility->id) }}"
                                           class="edit">
                                            Edit
                                        </a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="delete">
                                                Delete
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="9" class="empty">
                                    <div style="font-size: 35px; margin-bottom: 12px;">
                                        📚
                                    </div>

                                    <strong>No Facilities Found</strong>

                                    <p style="margin-top: 8px;">
                                        Start by adding your first library facility.
                                    </p>
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>

        <div class="footer">
            © {{ date('Y') }} Digital Library Management System
        </div>

    </main>
    <!-- Delete Confirmation Modal -->

<div class="modal-overlay" id="deleteModal">

    <div class="modal-box">

        <div class="modal-icon">
            🗑
        </div>

        <h2>Delete Facility?</h2>

        <p>This action cannot be undone.</p>

        <div class="modal-actions">

            <button type="button"
                    class="modal-btn cancel-btn"
                    onclick="closeDeleteModal()">
                Cancel
            </button>

            <button type="button"
                    class="modal-btn confirm-delete-btn"
                    onclick="confirmDelete()">
                Delete
            </button>

        </div>

    </div>

</div>
 <script>
    let selectedDeleteForm = null;

    function openDeleteModal(form) {
        selectedDeleteForm = form;

        document.getElementById('deleteModal')
            .classList.add('show');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal')
            .classList.remove('show');

        selectedDeleteForm = null;
    }

    function confirmDelete() {
        if (selectedDeleteForm) {
            selectedDeleteForm.submit();
        }
    }
</script>
</body>
</html>
