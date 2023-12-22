// import * as React from 'react';
import React, { useState } from 'react';
import TextField from '@mui/material/TextField';
import Grid from '@mui/material/Grid';
import { makeStyles } from 'material-ui-core';
import { Container, Button } from '@mui/material';
import { useNavigate } from 'react-router-dom';

const useStyles = makeStyles((theme) => ({
  paper: {
    marginTop: theme.spacing(8),
    display: 'flex',
    flexDirection: 'column',
    alignItems: 'center',
  },
  form: {
    width: '100%',
    marginTop: theme.spacing(3)
  },
  submit: {
    margin: theme.spacing(3,0,2)
  }
}))

export default function ProdukUpdate() {
  const classes = useStyles();
  const navigate = useNavigate();
  const handleSubmit = event => {
    event.preventDefault();
    var data = {
      'kode': kode,
      'nama': nama,
      'harga_beli': harga_beli,
      'harga_jual': harga_jual,
      'stok': stok,
      'min_stok': min_stok,
      'jenis_produk_id': jenis_produk_id
    }
    fetch('https://peserta31.msib5.hendevane.com/laravelSIB5/api/produk-create', {
      method: 'POST',
      headers: {
        Accept: 'application/form-data',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(
      (result)=>{
        alert(result['massege'])
        if(result['status'] !== 'error'){
          navigate ('/produk');
        }
      }
    )
  }
  const[kode, setKode] = useState('');
  const[nama, setNama] = useState('');
  const[harga_beli, setHarga_beli] = useState('');
  const[harga_jual, setHarga_jual] = useState('');
  const[stok, setStok] = useState('');
  const[min_stok, setMin_stok] = useState('');
  const[jenis_produk_id, setJenis_produk_id] = useState('');

  return (
    <Container maxWidth="xs">
    <div className={classes.paper}>
    <form className={classes.form} onSubmit={handleSubmit}>
      <Grid container spacing={2}>
        <Grid item xs={12} sm={6}>
          <TextField id="outlined-basic" label="Kode" variant="outlined" required onChange={(e) => setKode(e.target.value)} />
        </Grid>
        <Grid item xs={12} sm={6}>
          <TextField id="outlined-basic" label="Nama" variant="outlined" required onChange={(e) => setNama(e.target.value)} />
        </Grid>
        <Grid item xs={12}>
          <TextField id="outlined-basic" label="Harga Beli" variant="outlined" fullWidth onChange={(e) => setHarga_beli(e.target.value)} />
        </Grid>
        <Grid item xs={12}>
          <TextField id="outlined-basic" label="Harga Jual" variant="outlined" fullWidth onChange={(e) => setHarga_jual(e.target.value)} />
        </Grid>
        <Grid item xs={12}>
          <TextField id="outlined-basic" label="Stok" variant="outlined" fullWidth onChange={(e) => setStok(e.target.value)} />
        </Grid>
        <Grid item xs={12}>
          <TextField id="outlined-basic" label="Minimal Stok" variant="outlined" fullWidth onChange={(e) => setMin_stok(e.target.value)} />
        </Grid>
        <Grid item xs={12}>
          <TextField id="outlined-basic" label="Jenis Produk" variant="outlined" fullWidth onChange={(e) => setJenis_produk_id(e.target.value)} />
        </Grid>
      </Grid>
      <Button
        type="submit"
        fullWidth
        variant='contained'
        color="primary"
        className={classes.submit}
        >
          create
        </Button>

    </form>
    </div>

    </Container>
  );
}
