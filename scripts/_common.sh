#!/bin/bash

#=================================================
# COMMON VARIABLES
#=================================================

_create_data_dirs_if_required() {
    dirs=(_data galleries upload)
    for dir in "${dirs[@]}"; do
        if [ ! -d "$data_dir/$dir" ]; then
            rsync -a "$install_dir/$dir/" "$data_dir/$dir/"
        fi
        ynh_secure_remove "$install_dir/$dir"
    done
}

#=================================================
# PERSONAL HELPERS
#=================================================

#=================================================
# EXPERIMENTAL HELPERS
#=================================================

#=================================================
# FUTURE OFFICIAL HELPERS
#=================================================
