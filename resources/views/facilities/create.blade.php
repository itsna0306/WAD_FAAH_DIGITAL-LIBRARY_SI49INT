<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Facility | Digital Library</title>

    <style>
        :root {
            --primary: #244C3A;
            --primary-dark: #193829;
            --background: #F5F1E8;
            --surface: #FFFFFF;
            --sage: #DCE8DD;
            --text: #29372F;
            --muted: #78847B;
            --border: #E5E7DF;
            --danger: #B64B43;
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
            padding: 35px 20px;
        }

        .container {
            max-width: 850px;
            margin: auto;
        }

        .breadcrumb {
            margin-bottom: 22px;
            font-size: 13px;
            color: var(--muted);
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .page-header {
            margin-bottom: 25px;
        }

        .page-header h1 {
            color: var(--primary);
            font-size: 27px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: var(--muted);
            font-size: 14px;
        }

        .form-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 12px rgba(36, 76, 58, 0.05);
        }

        .section-title {
            color: var(--primary);
            font-size: 17px;
            margin-bottom: 22px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--border);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
        }

        .required {
            color: var(--danger);
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 7px;
            background: #FFFFFF;
            font-size: 13px;
            color: var(--text);
            outline: none;
            transition: 0.2s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(36, 76, 58, 0.08);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .checkbox-group {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 5px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 13px;
        }

        .checkbox-item input {
            width: 17px;
            height: 17px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .checkbox-item label {
            margin: 0;
            cursor: pointer;
        }

        .error {
            color: var(--danger);
            font-size: 12px;
            margin-top: 6px;
        }

        .alert {
            background: #FCE8E6;
            color: #A13E35;
            border: 1px solid #F3C6C1;
            border-radius: 7px;
            padding: 14px;
            margin-bottom: 22px;
            font-size: 13px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 30px;
            padding-top: 22px;
            border-top: 1px solid var(--border);
        }

        .btn {
            padding: 12px 20px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-secondary {
            background: var(--sage);
            color: var(--primary);
        }

        .btn-secondary:hover {
            background: #C9DCCB;
        }

        .footer {
            text-align: center;
            color: var(--muted);
            font-size: 11px;
            margin-top: 25px;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: auto;
            }

            .form-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="breadcrumb">
        <a href="{{ route('facilities.index') }}">Facilities</a>
        / Add Facility
    </div>

    <div class="page-header">
        <h1>Add New Facility</h1>
        <p>Enter the information below to register a new library facility.</p>
    </div>

    <div class="form-card">

        <h3 class="section-title">Facility Information</h3>

        @if($errors->any())
            <div class="alert">
                <strong>Please fix the following errors:</strong>

                <ul style="margin: 10px 0 0 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('facilities.store') }}" method="POST">

            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label for="area_name">
                        Area Name <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="area_name"
                        name="area_name"
                        value="{{ old('area_name') }}"
                        placeholder="Example: Main Reading Room"
                        required
                    >

                    @error('area_name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="area_number">
                        Area Number <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="area_number"
                        name="area_number"
                        value="{{ old('area_number') }}"
                        placeholder="Example: A-101"
                        required
                    >

                    @error('area_number')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="floor_number">
                        Floor Number <span class="required">*</span>
                    </label>

                    <input
                        type="number"
                        id="floor_number"
                        name="floor_number"
                        value="{{ old('floor_number') }}"
                        min="1"
                        placeholder="Example: 1"
                        required
                    >

                    @error('floor_number')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="area_type">
                        Area Type <span class="required">*</span>
                    </label>

                    <select id="area_type" name="area_type" required>
                        <option value="">Select Area Type</option>

                        <option value="Reading Room"
                            {{ old('area_type') == 'Reading Room' ? 'selected' : '' }}>
                            Reading Room
                        </option>

                        <option value="Silent Room"
                            {{ old('area_type') == 'Silent Room' ? 'selected' : '' }}>
                            Silent Room
                        </option>

                        <option value="Discussion Room"
                            {{ old('area_type') == 'Discussion Room' ? 'selected' : '' }}>
                            Discussion Room
                        </option>
                    </select>

                    @error('area_type')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group full-width">
                    <label>Available Facilities</label>

                    <div class="checkbox-group">

                        <div class="checkbox-item">
                            <input
                                type="checkbox"
                                id="has_wifi"
                                name="has_wifi"
                                value="1"
                                {{ old('has_wifi') ? 'checked' : '' }}
                            >

                            <label for="has_wifi">WiFi Available</label>
                        </div>

                        <div class="checkbox-item">
                            <input
                                type="checkbox"
                                id="has_power_outlet"
                                name="has_power_outlet"
                                value="1"
                                {{ old('has_power_outlet') ? 'checked' : '' }}
                            >

                            <label for="has_power_outlet">Power Outlet Available</label>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="status">
                        Area Status <span class="required">*</span>
                    </label>

                    <select id="status" name="status" required>
                        <option value="available"
                            {{ old('status', 'available') == 'available' ? 'selected' : '' }}>
                            Available
                        </option>

                        <option value="occupied"
                            {{ old('status') == 'occupied' ? 'selected' : '' }}>
                            Occupied
                        </option>

                        <option value="maintenance"
                            {{ old('status') == 'maintenance' ? 'selected' : '' }}>
                            Maintenance
                        </option>
                    </select>

                    @error('status')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group full-width">
                    <label for="description">Description</label>

                    <textarea
                        id="description"
                        name="description"
                        placeholder="Enter additional information about this facility..."
                    >{{ old('description') }}</textarea>

                    @error('description')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="form-actions">

                <a href="{{ route('facilities.index') }}"
                   class="btn btn-secondary">
                    Cancel
                </a>

                <button type="submit" class="btn btn-primary">
                    Save Facility
                </button>

            </div>

        </form>

    </div>

    <div class="footer">
        © {{ date('Y') }} Digital Library Management System
    </div>

</div>

</body>
</html>
