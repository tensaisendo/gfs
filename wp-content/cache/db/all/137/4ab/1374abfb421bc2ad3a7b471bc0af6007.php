�3X<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:397:"SELECT wp_gfs_redirection_items.*,wp_gfs_redirection_groups.position AS group_pos FROM wp_gfs_redirection_items INNER JOIN wp_gfs_redirection_groups ON wp_gfs_redirection_groups.id=wp_gfs_redirection_items.group_id AND wp_gfs_redirection_groups.status='enabled' AND wp_gfs_redirection_groups.module_id=1 WHERE (wp_gfs_redirection_items.regex=1 OR wp_gfs_redirection_items.url='/sitemap_index.xml')";s:11:"last_result";a:0:{}s:8:"col_info";a:14:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"id";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:3:"url";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:5:"regex";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:8:"position";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:10:"last_count";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:11:"last_access";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:8:"group_id";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:6:"status";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:11:"action_type";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"action_code";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:11:"action_data";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:10:"match_type";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:5:"title";s:5:"table";s:24:"wp_gfs_redirection_items";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:9:"group_pos";s:5:"table";s:25:"wp_gfs_redirection_groups";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}