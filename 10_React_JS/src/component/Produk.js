// import * as React from 'react';
import React, {useEffect, useState} from 'react';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';
import { Link, useNavigate } from 'react-router-dom';
import { ButtonGroup } from '@mui/material';

// function createData(name, calories, fat, carbs, protein) {
//   return { name, calories, fat, carbs, protein };
// }

// const rows = [
//   createData('Frozen yoghurt', 159, 6.0, 24, 4.0),
//   createData('Ice cream sandwich', 237, 9.0, 37, 4.3),
//   createData('Eclair', 262, 16.0, 24, 6.0),
//   createData('Cupcake', 305, 3.7, 67, 4.3),
//   createData('Gingerbread', 356, 16.0, 49, 3.9),
// ];

export default function Produk() {
  const[produk, setProduk] = useState([]);
  const token = localStorage.getItem('token');
  const navigate = useNavigate();
  const fetchProdukData = async () => {
    try {
      const response = await fetch('https://peserta31.msib5.hendevane.com/laravelSIB5/api/produk', {
        headers: {
          'Authorization': `Bearer ${token}`
        }
      });

      if (response.ok) {
        const result = await response.json();
        setProduk(result.data);
      } else {
        throw new Error('Failed to fetch data');
      }
    } catch (error) {
      console.error(error);
      // Handle error
    }
  };

  useEffect(() => {
    const fetchData = async () => {
      if (token) {
        await fetchProdukData();
      }
    };
    
    const token = localStorage.getItem('token');
    if (!token) {
      window.location.href = "/";
    }
    fetchData();
  }, [token]);

  const UpdateProduk = id => {
    window.location = '/update/'+id
  }

  const ProdukDelete = id => {
    var data = {
      'id':id
    }
    fetch('https://peserta31.msib5.hendevane.com/laravelSIB5/api/produk/'+id, {
      method: 'DELETE',
      headers: {
        Accept: 'application/form-data',
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(
        (result)=>{
          alert(result['massege'])
          if(result['status'] !== 'error'){
            // ProdukGet();
            // window.location.reload();
            navigate('/produk');
          }
        }
    )
  }
  
  return (
    <TableContainer component={Paper}>

    <Stack spacing={2} direction="row">
      <Link to='/produk/create'>
        <Button variant="contained">Create</Button>
      </Link>
    </Stack>

      <Table sx={{ minWidth: 650 }} aria-label="simple table">
        <TableHead>
          <TableRow>
            <TableCell>Kode</TableCell>
            <TableCell align="right">Nama</TableCell>
            <TableCell align="right">Harga Beli</TableCell>
            <TableCell align="right">Harga Jual</TableCell>
            <TableCell align="right">Stok</TableCell>
            <TableCell align="right">Minimal Stok</TableCell>
            <TableCell align="right">Jenis Produk</TableCell>
            <TableCell align="right">Foto Produk</TableCell>
            <TableCell align="center">Action</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {produk.map((row) => (
            <TableRow
              key={row.name}
              sx={{ '&:last-child td, &:last-child th': { border: 0 } }}
            >
              <TableCell component="th" scope="row">
                {row.kode}
              </TableCell>
              <TableCell align="right">{row.nama}</TableCell>
              <TableCell align="right">{row.harga_beli}</TableCell>
              <TableCell align="right">{row.harga_jual}</TableCell>
              <TableCell align="right">{row.stok}</TableCell>
              <TableCell align="right">{row.min_stok}</TableCell>
              <TableCell align="right">{row.jenis}</TableCell>
              {/* <TableCell align="right"><img src={'https://peserta31.msib5.hendevane.com/laravelSIB5/public/admin/img/'+row.foto} width='100px' height='100px' /></TableCell> */}
              <TableCell align="right">
              {row.foto == null ?
                <img src={'https://peserta31.msib5.hendevane.com/laravelSIB5/public/admin/img/nophoto.jpeg'} width='100px' height='100px' alt='piture produk' /> : <img src={'https://peserta31.msib5.hendevane.com/laravelSIB5/public/admin/img/'+row.foto} width='100px' height='100px' alt='piture produk' />
              }
              </TableCell>
              <TableCell align="center">
                <ButtonGroup>
                  <Button variant='contained' color='primary' onClick={() => UpdateProduk(row.id)}>
                    Edit
                  </Button>
                  <Button variant='contained' color='error' onClick={() => ProdukDelete(row.id)}>
                    Delete
                  </Button>
                </ButtonGroup>
              </TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
  );
}
