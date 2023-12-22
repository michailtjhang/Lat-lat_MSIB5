// import * as React from 'react';
import React, { useEffect, useState } from 'react';
import AppBar from '@mui/material/AppBar';
import Box from '@mui/material/Box';
import Toolbar from '@mui/material/Toolbar';
import { Grid } from '@mui/material';
import IconButton from '@mui/material/IconButton';
import MenuIcon from '@mui/icons-material/Menu';
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';
import {Link} from 'react-router-dom';

export default function DenseAppBar() {
  const [isLoggedIn, setIsLoggedIn] = useState(false);

  // Function untuk melakukan login
  const handleLogout = () => {
    setIsLoggedIn(false);
    localStorage.removeItem('token'); 
    window.location.href = "/";
  };

  useEffect(() => {
    const token = localStorage.getItem('token');
    if (token) {
      setIsLoggedIn(true);
    }
  }, []);

  return (
    <Box sx={{ flexGrow: 1 }}>
      <AppBar position="static">
        <Toolbar variant="dense">
        <IconButton edge="start" color="inherit" aria-label="menu" sx={{ mr: 2 }}>
          <MenuIcon />
        </IconButton>
          <Grid container justifyContent="space-between" alignItems="center">
            <Grid item>
              <Stack spacing={2} direction="row">
                <Link to='/'>
                  <Button variant="contained" color="primary">
                    Home
                  </Button>
                </Link>
                {isLoggedIn && (
                  <Link to='/produk'>
                    <Button variant="contained" color="primary">
                      Produk
                    </Button>
                  </Link>
                )}
              </Stack>
            </Grid>
            <Grid item>
              {!isLoggedIn ? (
                <Link to='/login'>
                  <Button variant="contained" color="primary">
                    Login
                  </Button>
                </Link>
              ) : (
                <Button variant="contained" color="primary" onClick={handleLogout}>
                  Logout
                </Button>
              )}
            </Grid>
          </Grid>
        </Toolbar>
      </AppBar>
    </Box>
  );
}
