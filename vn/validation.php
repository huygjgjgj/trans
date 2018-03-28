<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    
    'accepted'             => 'The :attribute phải được chấp nhận.',
    'active_url'           => 'The :attribute không có giá trị URL.',
    'after'                => 'The :attribute phải là sau :date ngày .',
    'after_or_equal'       => 'The :attribute phải là sau hoặc bằng :date ngày.',
    'alpha'                => 'The :attribute chỉ có thể chứa chữ cái.',
    'alpha_dash'           => 'The :attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => 'The :attribute chỉ chứa các chữ và số',
    'array'                => 'The :attribute Phải là mảng.',
    'before'               => 'The :attribute phải là trước :date ngày.',
    'before_or_equal'      => 'The :attribute phải la trước hoặc bằng :date ngày.',
    'between'              => [
        'numeric' => 'The :attribute phải nằm trong khoảng :min và :max.',
        'file'    => 'The :attribute phải nằm trong khoảng :min và :max kilobytes.',
        'string'  => 'The :attribute phải nằm trong khoảng :min và :max characters.',
        'array'   => 'The :attribute phải có trong khoảng :min và :max items.',
    ],
    'boolean'              => 'The :attribute field phải là đúng hoặc sai.',
    'confirmed'            => 'The :attribute xác nhận không phù hợp.',
    'date'                 => 'The :attribute là ngày không hợp lệ',
    'date_format'          => 'The :attribute không khớp với định dạng :format.',
    'different'            => 'The :attribute và :other không được giống nhau.',
    'digits'               => 'The :attribute phải là :digits chữ số.',
    'digits_between'       => 'The :attribute Phải nằm trong khoảng :min và :max chữ số.',
    'dimensions'           => 'The :attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'             => 'The :attribute trường có giá trị trung lặp',
    'email'                => 'The :attribute Phải la một địa chỉ email hợp lệ.',
    'exists'               => 'The :attribute được chọn không có hiệu lực.',
    'file'                 => 'The :attribute phải là tập tin.',
    'filled'               => 'The :attribute trường phải có giá trị',
    'image'                => 'The :attribute phải là một hình ảnh.',
    'in'                   => 'The :attribute được chọn không có hiệu lực.',
    'in_array'             => 'The :attribute trường không tồn tại trong :other.',
    'integer'              => 'The :attribute phải là số nguyên.',
    'ip'                   => 'The :attribute phải là một địa chỉ IP hợp lệ.',
    'json'                 => 'The :attribute phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => 'The :attribute không được lớn hơn :max.',
        'file'    => 'The :attribute không được lớn hơn :max kilobytes.',
        'string'  => 'The :attribute không được lớn hơn :max characters.',
        'array'   => 'The :attribute có thể không có nhiều hơn :max items.',
    ],
    'mimes'                => 'The :attribute phải là một tập tin loại : :values.',
    'mimetypes'            => 'The :attribute phải là một tập tin loại : :values.',
    'min'                  => [
        'numeric' => 'The :attribute phải là ít nhất :min.',
        'file'    => 'The :attribute phải là ít nhất :min kilobytes.',
        'string'  => 'The :attribute phải là ít nhất :min characters.',
        'array'   => 'The :attribute phải có ít nhất :min items.',
    ],
    'not_in'               => 'The :attribute được chọn không có hiệu lực.',
    'numeric'              => 'The :attribute phải là 1 số.',
    'present'              => 'The :attribute trường phải có tồn tại.',
    'regex'                => 'The :attribute định dạng không hợp lệ.',
    'required'             => 'The :attribute lĩnh vực được yêu cầu.',
    'required_if'          => 'The :attribute trường được yêu cầu khi :other là :value.',
    'required_unless'      => 'The :attribute trường được yêu cầu trừ khi :other trong :values.',
    'required_with'        => 'The :attribute trường được yêu cầu khi :values là present.',
    'required_with_all'    => 'The :attribute trường được yêu cầu khi :values là present.',
    'required_without'     => 'The :attribute trường được yêu cầu khi :values không tồn tại.',
    'required_without_all' => 'The :attribute trường bắt buộc khi không có trường :values tồn tại.',
    'same'                 => 'The :attribute và :other phải phù hợp.',
    'size'                 => [
        'numeric' => 'The :attribute phải là :size.',
        'file'    => 'The :attribute phải là :size kilobytes.',
        'string'  => 'The :attribute phải là :size characters.',
        'array'   => 'The :attribute phải chứa :size items.',
    ],
    'string'               => 'The :attribute phải là 1 chuỗi.',
    'timezone'             => 'The :attribute phải là một vùng hợp lệ.',
    'unique'               => 'The :attribute đã được chụp.',
    'uploaded'             => 'The :attribute không tải lên.',
    'url'                  => 'The :attribute định dạng không hợp lệ.',
    
    // Blacklist - Whitelist
    'whitelist_email'      => 'Địa chỉ email này bị liệt vào danh sách đen.',
    'whitelist_domain'     => 'Tên miền của địa chỉ email của bạn bị liệt vào danh sách đen.',
    'whitelist_word'       => 'The :attribute chứa một từ hoặc cụm từ bị cấm.',
    'whitelist_word_title' => 'The :attribute chứa một từ hoặc cụm từ bị cấm.',
    
    
    // Custom Rules
    'mb_between'           => 'The :attribute phải nằm trong khoảng :min và :max characters.',
    'recaptcha'            => 'The :attribute trường không chính xác.',
    'phone'                => 'The :attribute trường chứa một số không hợp lệ.',
    'dumbpwd'              => 'Mật khẩu này quá phổ biến. Hãy thử lại!',
    'phone_number'         => 'Số điện thoại của bạn không hợp lệ.',
    'valid_username'       => 'The :attribute trường phải là một chuỗi chữ số.',
    'allowed_username'     => 'The :attribute không được phép.',
    
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    
    'custom' => [
	
		'database_connection' => [
			'required' => 'Không thể kết nối với máy chủ MySQL',
		],
		'database_not_empty' => [
			'required' => 'Cơ sở dữ liệu không được rỗng',
		],
		'promo_code_not_valid' => [
			'required' => 'Mã khuyến mại không hợp lệ',
		],
		'smtp_valid' => [
			'required' => 'Không thể kết nối với máy chủ SMTP',
		],
		'yaml_parse_error' => [
			'required' => 'Không thể phân tích yaml. Vui lòng kiểm tra cú pháp',
		],
		'file_not_found' => [
			'required' => 'Không tìm thấy tệp.',
		],
		'not_zip_archive' => [
			'required' => 'Tệp không phải là gói zip.',
		],
		'zip_archive_unvalid' => [
			'required' => 'Không thể đọc gói.',
		],
		'custom_criteria_empty' => [
			'required' => 'Tiêu chí tùy chỉnh không được để trống',
		],
		'php_bin_path_invalid' => [
			'required' => 'PHP thực thi không hợp lệ. Vui lòng kiểm tra lại.',
		],
		'can_not_empty_database' => [
			'required' => 'Không thể DROP bảng nhất định, vui lòng dọn dẹp cơ sở dữ liệu của bạn theo cách thủ công và thử lại.',
		],
		'recaptcha_invalid' => [
			'required' => 'Kiểm tra reCAPTCHA không hợp lệ.',
		],
		'payment_method_not_valid' => [
			'required' => 'Đã xảy ra lỗi với cài đặt phương thức thanh toán. Vui lòng kiểm tra lại.',
		],
    
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    
    'attributes' => [
        
        'gender'                => 'giới tính',
        'name'                  => 'Tên',
        'first_name'            => 'Tên lót',
        'last_name'             => 'Họ',
        'user_type'             => 'user type',
        'country'               => 'country',
        'phone'                 => 'Điện thoại',
        'address'               => 'Địa chỉ',
        'mobile'                => 'Di động',
        'sex'                   => 'sex',
        'year'                  => 'Năm',
        'month'                 => 'Tháng',
        'day'                   => 'Ngày',
        'hour'                  => 'Giờ',
        'minute'                => 'Phút',
        'second'                => 'Giây',
        'username'              => 'Tên đăng nhập',
        'email'                 => 'Địa chỉ email',
        'password'              => 'Mật khẩu',
        'password_confirmation' => 'Xác nhận mật khẩu',
        'g-recaptcha-response'  => 'Captcha',
        'term'                  => 'điều kiện',
        'category'              => 'Danh mục',
        'post_type'             => 'loại thư',
        'title'                 => 'tiêu đề',
        'body'                  => 'body',
        'description'           => 'Miêu tả dài',
        'excerpt'               => 'Miêu tả ngắn',
        'date'                  => 'ngày',
        'time'                  => 'thời gian',
        'available'             => 'có sẵn',
        'size'                  => 'kích cỡ',
        'price'                 => 'giá',
        'salary'                => 'lương',
        'contact_name'          => 'Tên',
        'location'              => 'vị trí',
        'admin_code'            => 'Mã quản trị viên',
        'city'                  => 'thành phố',
        'package'               => 'gói',
        'payment_method'        => 'phương thức thanh toán',
        'sender_name'           => 'Tên',
        'subject'               => 'đối tượng',
        'message'               => 'Tin nhắn',
        'report_type'           => 'report type',
        'file'                  => 'tập tin',
        'filename'              => 'tên tập tin',
        'picture'               => 'hình ảnh',
        'resume'                => 'Hồ sơ',
        'login'                 => 'đăng nhập',
        'code'                  => 'mã',
        'token'                 => 'mã thông báo',
        'comment'               => 'bình luận',
        'rating'                => 'Xêp hạng',
        'logo'                  => 'logo',
		'company_id' 			=> 'Công ty',
		'resume_id' 			=> 'Id hồ sơ',
		'company.logo' 			=> 'logo',
		'company.name' 			=> 'Tên công ty',
		'company.description' 	=> 'mô tả công tyn',
		'company.country_code'  => 'công ty thuộc quốc gia',
		'company.city_id' 		=> 'công ty thuộc thành phố ',
		'company.address' 		=> 'địa chỉ công ty',
		'company.phone' 		=> 'số điện thoại của công ty',
		'company.fax' 			=> 'số fax của công ty',
		'company.email' 		=> 'email công ty',
		'company.website' 		=> 'Trang web công ty',
		'resume.filename' 		=> 'tên hồ sơ',
    
    ],

];
